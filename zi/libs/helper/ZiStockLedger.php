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
 *  ZiStockLedger.php
 */

class ZiStockLedger {

  function __construct()
  {
    $this->Table = StokLedger::table();
  }

  public function insert($attr_array)
  {
    if (!$attr_array)
      return false;

    $this->Table->insert($attr_array);
    return true;
  }

  public function insert_db($item_kode,
                            $voucher_type,
                            $voucher_no,
                            $voucher_dtl_no, $actual_qty,
                            $warehouse, $qty_after_trans,
                            $valuation_rate,
                            $stock_value,
                            $stock_value_diff,
                            $incoming_rate = 0,
                            $batch = null) {
    $item = Item::first(array('conditions' => "item_kode = '" . $item_kode . "'" ));
    // saat nya entry data stock ledger
    /*
     "stock_value" => $stock_value,*/
    $attr = array(
      "created" => date("Y-m-d H:i:s"),
      "modified" => date("Y-m-d H:i:s"),
      "fiscal_year" => date('Y'),
      "company" => "RSMM",
      "posting_date" => date("Y-m-d H:i:s"),
      "posting_time" => date("H:i:s"),
      "qty_after_transaction" => $qty_after_trans,
      "voucher_no" => $voucher_no,
      "voucher_detail_no" => $voucher_dtl_no,
      "valuation_rate" => $valuation_rate,
      "voucher_type" => $voucher_type,
      "incoming_rate" => $incoming_rate,
      "item_kode" => $item->item_kode,
      "item_nama" => $item->item_nama,
      "item_uom" => $item->item_uom,
      "batch_no" => $batch,
      "actual_qty" => $actual_qty,
      "stock_value" => $stock_value,
      "stock_value_difference" => $stock_value_diff,
      "warehouse" => $warehouse
    );
    $attr["id"] = ZiUtil::GetNowID();
    $this->Table->insert($attr);
  }
}