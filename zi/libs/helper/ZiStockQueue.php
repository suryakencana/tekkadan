<?php
/**
 * Copyright (c) 12 2015 | surya
 * 02/12/15 nanang.ask@kubuskotak.com
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *  ZiStockQueue.php
 */

class ZiStockQueue {

  function __construct()
  {
    $this->Table = StokQueue::table();
  }

  public function incoming_stock($item_kode,
                                 $warehouse,
                                 $incoming_rate,
                                 $qty,
                                 $batch_no = null) {
    //menambah record stock queue (item_kode, warehouse, batch_no, $incoming_rate)
    // untuk jenis entry transfer update last record
    $attr = array(
      "company" => "RSMM",
      "created" => date("Y-m-d H:i:s"),
      "modified" => date("Y-m-d H:i:s"),
      "incoming_rate" => $incoming_rate,
      "warehouse" => $warehouse,
      "item_kode" => $item_kode,
      "batch_no" => $batch_no
    );
    // cek record ada kah
    $query = "";
    if (!is_null($batch_no) && !empty($batch_no))
      $query = "batch_no ='".$batch_no."' AND ";
    $query .= "item_kode ='".$item_kode."' AND warehouse ='".$warehouse
      ."' AND incoming_rate ='".$incoming_rate."'";

    $condition = array('conditions' => $query, 'order' => 'created ASC');
    $valid = StokQueue::find('first', $condition);

    if (is_null($valid)) {
      $attr["qty"] = $qty;
      $attr["id"] = ZiUtil::GetNowID();
      $this->Table->insert($attr);
    } else {
      $attr["qty"] = ZiUtil::check_int($valid->qty) + $qty;
      $where = "id ='".$valid->id."'";
      $this->Table->update($attr, $where);
    }
  }

  public function outgoing_stock($item_kode,
                                 $warehouse,
                                 $qty,
                                 $batch_no = null) {
    // Default menggunakan FIFO
    // mengurangi qty stock queue pertama masuk (created ASC)
    // cek record ada kah
    $query = "";
    if (!is_null($batch_no) && !empty($batch_no))
      $query = "batch_no ='".$batch_no."' AND ";
    $query .= "item_kode ='".$item_kode."' AND warehouse ='".$warehouse."'";

    $condition = array('conditions' => $query, 'order' => 'created ASC');
    $valid = StokQueue::find('all', $condition);

    if (!is_null($valid) && !empty($valid)) {
      foreach($valid as $row){
        if ($row->qty <= 0) continue;

        $attr["qty"] = ZiUtil::check_int($row->qty) - $qty;
        $where = "id ='".$row->id."'";
        $this->Table->update($attr, $where);
        break;
      }
    }
  }

  /***
   * @return int (basic_rate item) valuation rate all record (qty * incoming) / count_all_record
   * @param string $item_kode
   * @param string $warehouse
   * @param null $batch_no
   */
  public static function valuation_rate($item_kode, $warehouse, $batch_no = null)
  {
    $query = "";
    if (!is_null($batch_no) && !empty($batch_no))
      $query = "batch_no ='".$batch_no."' AND ";
    $query .= "item_kode ='".$item_kode."' AND warehouse ='".$warehouse."'";
    $conditions = array('conditions' => $query, 'order' => 'created ASC');
    $queue = StokQueue::all($conditions);

    if(empty($queue))
      return 0;

    $amount = 0;
    $amount_qty = 0;
    foreach($queue as $row){
      $amount += $row->qty * $row->incoming_rate;
      $amount_qty += ZiUtil::check_int($row->qty);
    }
    $valuation_rate = $amount / $amount_qty;
    return $valuation_rate > 0 ? $valuation_rate : 0 ;
  }
}