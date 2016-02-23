<?php
/*
* Copyright (C) 2015 surya || nanang.ask@gmail.com
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the NGNU General Public License
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
*/

/**
* User: surya
* Date: 23/10/2015
* Time: 11:36 PM
*/

class Stok_Controller extends \Zi\Lock_c
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $grid["folder"] = "Master";
    $cols = array();
    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "ID Obat", "field": "item_id", "visible": false}');
    $cols[] = json_decode('{ "title": "Kode Obat", "field": "item_kode"}');
    $cols[] = json_decode('{ "title": "Nama Obat","field": "item_nama"}');
    $cols[] = json_decode('{ "title": "Harga Jual", "field": "item_harga_jual"}');
    $cols[] = json_decode('{ "title": "Jenis Obat", "field": "jenis_nama"}');
    $cols[] = json_decode('{ "title": "Stok Obat", "field": "total_stok"}');

    $grid["title"] = "Stok Item";
    $grid["source_url"] = App::urlFor("stok.dataset");
    $grid["method"] = "GET";
    $grid["cols"] = json_encode($cols);
    App::render("component/gridbootstrap", $grid);
  }

  /**
  * dataset Stock Dataset batch Balance
  * @return json stock balance batch
  */
  public function datasetBatch()
  {
    $req = APP::request();
    $params = $req->get();
    $search =ZiUtil::is_set('search', $params);
    $query = "item_kode ILIKE '%" . $search ."%'";
    $results = ZiUtil::search_result_DB($query, $params, 'StokBatchBalance');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  /**
  * dataset Stock Balance
  * @return json stock balance
  */
  public function dataset()
  {
    $req = APP::request();
    $params = $req->get();
    $search =ZiUtil::is_set('search', $params);
    $query = "item_kode ILIKE '%" . $search ."%'";
    $results = ZiUtil::search_result_jq_DB($query, $params, 'StokBalance');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  /**
  * dataset Stock Balance
  * @return json stock balance
  */
  public function balance()
  {
    $req = APP::request();
    $params = $req->get();
    $query = "item_kode = '".$params['item_kode']."' and warehouse ='".$params['warehouse']."'";
    $results = ZiUtil::search_result_DB($query, $params, 'StokBalance');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  /**
  * dataset Stock Balance
  * @return json stock balance
  */
  public function balancebatch()
  {
    $req = APP::request();
    $params = $req->get();
    $orBatchSerial = isset($params['batch_no']) && !empty($params['batch_no']) ? " AND batch_no ='".$params['batch_no']."'" : "";
    $query = "item_kode = '".$params['item_kode']."' and warehouse ='".$params['warehouse']."'".$orBatchSerial;
    $results = ZiUtil::search_result_DB($query, $params, 'StokBatchBalance');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function entrytipe()
  {
    $req = APP::request();
    $params = $req->get();
    $search =ZiUtil::is_set('search', $params);
    $query = "entry_tipe_nama ILIKE '%".$search."%'";
    $results = ZiUtil::search_result_DB($query, $params, 'StokEntryTipe');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function entryitem()
  {
    $grid['folder'] = "Stok";
    $grid['title'] = "Input Stok Barang";

    $grid['url_item'] = APP::urlFor('item.dataset');
    $grid['url_item_uom'] = APP::urlFor('unitOM.dataset');
    $grid['url_item_batch'] = APP::urlFor('batch.stockEntries');
    $grid['url_stok_balance'] = APP::urlFor('stok.balance');

    $grid['url_gudang'] = APP::urlFor('warehouse.dataset');
    App::render('stock/form_item_entry', $grid);
  }

  /**
  * Stock Entry ada 3 jenis
  * - item issue (keluar)[from warehouse]
  * - item receipt (masuk)[to warehouse]
  * - item transfer (mutasi)[from wh to wh]
  */
  public function entry($tipe)
  {
    $tipe_arr = array('MASUK', 'KELUAR');

    if(in_array($tipe, $tipe_arr)) {
      $grid['folder'] = "Stok";
      $grid['title'] = "Stok " . $tipe;
      // Default Value
      $grid['data']['entry_kode'] = "STE-" . ZiUtil::GetNowID();
      $grid['data']['posting_date'] = date("Y-m-d");
      $grid['data']['posting_time'] = date("H:i:s");
      $grid['data']['stok_entry_tipe'] = $tipe;

      $grid['data']['from_warehouse'] = '7c87a8d69bc21df012ae8e3b17c5fff7';
      $grid['data']['to_warehouse'] = '';

      if ($tipe == 'MASUK') {
        $grid['data']['from_warehouse'] = '';
        $grid['data']['to_warehouse'] = '7c87a8d69bc21df012ae8e3b17c5fff7';
      }

      $grid['gridtitle'] = "Stock Entries";
      /****
      * barcode: "11245"
      * from_warehouse: "20151112698730750"
      * item_batch: "ITEM-KENALOG-5g-0001"
      * item_kode: "ITEM-KENALOG-5g"
      * item_nama: "KENALOG"
      * item_price: "4.566"
      * item_qty: "33.324"
      * item_serial: ""
      * item_uom: "BOX"
      * keterangan: "asdqweqw"
      * to_warehouse: "7c87a8d69bc21df012ae8e3b17c5fff7"
      */

      $cols = array();
      $cols[] = json_decode('{"field": "state", "checkbox": true}');
      $cols[] = json_decode('{ "title": "id", "field": "id", "visible": false}');
      $cols[] = json_decode('{ "title": "Serial No..", "field": "item_serial", "visible": false}');
      $cols[] = json_decode('{ "title": "Batch No.", "field": "item_batch", "visible": false}');
      $cols[] = json_decode('{ "title": "Kode Item", "field": "item_kode"}');
      $cols[] = json_decode('{ "title": "Nama Item","field": "item_nama"}');
      $cols[] = json_decode('{ "title": "UOM", "field": "item_uom", "visible": false}');
      $cols[] = json_decode('{ "title": "Keterangan", "field": "keterangan", "visible": false}');
      $cols[] = json_decode('{ "title": "Dari Gudang", "field": "from_warehouse", "visible": false}');
      $cols[] = json_decode('{ "title": "Dari Gudang", "field": "from_warehouse_nama"}');
      $cols[] = json_decode('{ "title": "Ke Gudang", "field": "to_warehouse", "visible": false}');
      $cols[] = json_decode('{ "title": "Ke Gudang", "field": "to_warehouse_nama"}');
      $cols[] = json_decode('{ "title": "Qty", "field": "item_qty"}');
      $cols[] = json_decode('{ "title": "Actual Qty", "field": "actual_qty"}');
      $cols[] = json_decode('{ "title": "Basic Rate", "field": "item_price", "visible": false}');
      $cols[] = json_decode('{ "title": "Total Harga", "field": "item_amount"}');
      $grid["cols"] = json_encode($cols);

      //    $grid['source_url'] = APP::urlFor('pasien.jenispasien');
      $grid['url_submit'] = APP::urlFor('stok.s003');
      $grid['url_entry_tipe'] = APP::urlFor('stok.entrytipe');
      $grid['url_gudang'] = APP::urlFor('warehouse.dataset');
      $grid['modal_form'] = APP::urlFor('stok.entryitem');
      App::render('stock/form_entry', $grid);
    } else {
      App::flash('info', 'Menu yang anda tuju tidak ada');
      App::redirect('stok.list_stock_entry');
    }
  }

  public function s003()
  {
    try {
        $req = App::request();
        if($req->isPost()) {
          $post = $req->post();
          $rows = json_decode($post['rows'], true);
          if(!empty($post["entry_kode"])) {
            if (is_null($post["gen_id"]) || $post["gen_id"] == "") {

              $total_amount = 0;
              $incoming = 0;
              $outgoing = 0;

              foreach($rows as $row) {
                $basic_amount = ZiUtil::check_int($row["item_amount"]);
                // beda receipt dg transfer item_price ikut valuation rate
                $basic_rate = ZiUtil::check_int($row["item_price"]);

                $additional_cost = 0;
                // valuation_rate
                $amount_rate = $basic_rate+$additional_cost;
                $amount = (ZiUtil::check_int($row["item_qty"])*$amount_rate);
                $attr_detail = array(
                  "created" => date("Y-m-d H:i:s"),
                  "stok_entry" => $post["entry_kode"],
                  "to_warehouse" => $row["to_warehouse"],
                  "from_warehouse" => $row["from_warehouse"],
                  "item_kode" => $row["item_kode"],
                  "item_nama" => $row["item_nama"],
                  "item_uom" => $row["item_uom"],
                  "batch_no" => $row["item_batch"],
                  "keterangan" => $row["keterangan"],
                  "actual_qty" => $row["actual_qty"],
                  "qty" => $row["item_qty"],
                  "basic_amount" => $basic_amount,
                  "basic_rate" => $basic_rate,
                  "valuation_rate" => $amount_rate,
                  "additional_cost" => $additional_cost,
                  "amount" =>  $amount
                );
                $voucher_detail_no = ZiUtil::GetNowID();
                $attr_detail["id"] = $voucher_detail_no;
                $tableDetail = StokEntryD::table();

                $tableDetail->insert($attr_detail);
                // incoming
                if(isset($row["to_warehouse"]) && !empty($row["to_warehouse"])) {
                  $incoming+=$amount;

                  // insert stock_queue
                  // klo jenis transfer incoming_rate pake hasil dari valuation_rate
                  // receipt pake $amount_rate
                  $stock_queue = new ZiStockQueue();

                  $stock_queue->incoming_stock(
                  $row["item_kode"],
                  $row["to_warehouse"],
                  $amount_rate,
                  $row["item_qty"],
                  $row["item_batch"]);

                  $valuation_rate = ZiStockQueue::valuation_rate($row["item_kode"], $row["to_warehouse"], $row["item_batch"]);

                  $valuation_rate = $valuation_rate > 0 ? $valuation_rate : $amount_rate;
                  $qty_after_trans =  ZiUtil::check_int($row["actual_qty"]) + ZiUtil::check_int($row["item_qty"]);
                  $stock_value_diff = ZiUtil::check_int($row["item_qty"])*$amount_rate;
                  $stock_value = $qty_after_trans*$valuation_rate;

                  // saat nya entry data stock ledger
                  $stockLedger = new ZiStockLedger();
                  $stockLedger->insert_db(
                  $row["item_kode"],
                  "Stock Entry",
                  $post["entry_kode"],
                  $voucher_detail_no,
                  ZiUtil::check_int($row["item_qty"]),
                  $row["to_warehouse"],
                  $qty_after_trans,
                  $valuation_rate,
                  $stock_value,
                  $stock_value_diff,
                  $amount_rate,
                  $row["item_batch"]
                );
              }
              // outgoing
              if(isset($row["from_warehouse"]) && !empty($row["from_warehouse"])) {
                $outgoing+=$amount;

                $stock_queue = new ZiStockQueue();

                $stock_queue->outgoing_stock(
                $row["item_kode"],
                $row["from_warehouse"],
                $row["item_qty"],
                $row["item_batch"]);

                $valuation_rate = ZiStockQueue::valuation_rate($row["item_kode"], $row["from_warehouse"], $row["item_batch"]);

                $valuation_rate = $valuation_rate > 0 ? $valuation_rate : $amount_rate;
                $qty_after_trans = ZiUtil::check_int($row["actual_qty"]) - ZiUtil::check_int($row["item_qty"]);
                $stock_value_diff = (0 - ZiUtil::check_int($row["item_qty"]))*$valuation_rate;
                $stock_value = $qty_after_trans*$valuation_rate;

                // $valuation_rate diperoleh dari total all incoming stock
                // saat nya entry data stock ledger
                $stockLedger = new ZiStockLedger();
                $stockLedger->insert_db(
                $row["item_kode"],
                "Stock Entry",
                $post["entry_kode"],
                $voucher_detail_no,
                (0 - ZiUtil::check_int($row["item_qty"])),
                $row["from_warehouse"],
                $qty_after_trans,
                $valuation_rate,
                $stock_value,
                $stock_value_diff,
                0,
                $row["item_batch"]
              );
            }
            $total_amount+=$amount;

          }

          $attr_master = array(
            "created" => date("Y-m-d H:i:s"),
            "modified" => date("Y-m-d H:i:s"),
            "title" => "Material ".$post["stok_entry_tipe"],
            "naming_series" => "STE",
            "fiscal_year" => date('Y'),
            "company" => "RSMM",
            "posting_date" => $post["posting_date"],
            "posting_time" => $post["posting_time"],
            "stok_entry_kode" => $post["entry_kode"],
            "stok_entry_tipe" => $post["stok_entry_tipe"],
            "to_warehouse" => $post["to_warehouse"],
            "from_warehouse" => $post["from_warehouse"],
            "total_incoming_value" => $incoming,
            "total_outgoing_value" => $outgoing,
            "total_additional_costs" => 0,
            "value_difference" => $incoming-$outgoing
          );

          $attr_master["total_amount"] = $total_amount;
          $attr_master["id"] = ZiUtil::GetNowID();
          $table = StokEntry::table();
          $table->insert($attr_master);
        }

        App::flash('info', 'Data Tersimpan.');
        App::redirect('stok.list_stock_entry');
      }
    }
      App::flash('error', 'Terjadi kesalahan pada inputan anda.');
      App::redirect('stok.entry');
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function dataset_stock_entry()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $params);
    $query = "stok_entry_kode ILIKE '%".$search."%'";
    $results = ZiUtil::search_result_jq_DB($query, $params, 'StokEntry');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function detail_stock_entry($id)
  {
    $query = "stok_entry = '".$id."'";
    $results = StokEntryD::all(array('conditions' => $query));
    $total = StokEntryD::count(array('conditions' => $query));
    return ZiUtil::dataset_json($results, $total);
  }

  public function list_stock_entry()
  {
    $grid['folder'] = "Laporan";
    $grid['title'] = "Stok Entry";

    $cols = array();
    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{"name": "id", "hidden": true}');
    $cols[] = json_decode('{ "label": "Kode Entry", "name": "stok_entry_kode", "key": true}');
    $cols[] = json_decode('{ "label": "Tanggal Posting", "name": "posting_date"}');
    $cols[] = json_decode('{ "label": "Jam Posting", "name": "posting_time"}');
    $cols[] = json_decode('{ "label": "Jenis Entry", "name": "stok_entry_tipe"}');
    $cols[] = json_decode('{ "label": "Nilai Masuk", "name": "total_incoming_value",
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " }
      }'
    );
    $cols[] = json_decode('{ "label": "Nilai Keluar", "name": "total_outgoing_value",
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " }
      }'
    );
    $cols[] = json_decode('{ "label": "Total Nilai", "name": "total_amount",
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " }
      }'
    );

    $grid["cols"] = json_encode($cols);

    $grid['source_url'] = APP::urlFor('stok.dataset_stock_entry');
    $grid['method'] = "GET";

    $grid['gridtitle'] = "Stok Entry";

    // untuk detail penjualan
    $grid['detail_grid_url'] = APP::urlFor('stok.detail_stock_entry');
    $grid['detail_grid_title'] = "Invoice #-";

    $cols = array();
    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "name": "id", "key": true, "hidden": true}');
    $cols[] = json_decode('{ "label": "Kode Item", "name": "item_kode", "width": 100}');
    $cols[] = json_decode('{ "label": "Nama Item","name": "item_nama"}');
    $cols[] = json_decode('{ "label": "UOM", "name": "item_uom"}');
    $cols[] = json_decode('{ "label": "Stok Entry #", "name": "stok_entry"}');
    $cols[] = json_decode('{ "label": "Dari Gudang", "name": "warehouse", "hidden": true}');
    $cols[] = json_decode('{ "label": "Qty", "name": "qty",
        "width": 75,
        "align": "left",
        "formatter": "integer",
        "formatoptions": { "thousandsSeparator": "," }
      }'
    );
    $cols[] = json_decode('{ "label": "Stok Tersedia", "name": "actual_qty",
        "width": 75,
        "align": "left",
        "formatter": "integer",
        "formatoptions": { "thousandsSeparator": "," }
      }'
    );
    $cols[] = json_decode('{ "label": "Harga Dasar", "name": "basic_rate"}');
    $cols[] = json_decode('{ "label": "Harga Jual", "name": "basic_amount",
      "width": 85,
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. "
      }
    }'
    );
    $cols[] = json_decode('{ "label": "Prediksi Harga", "name": "valuation_rate",
      "width": 85,
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. "
      }
    }'
    );

    $grid["detail_cols"] = json_encode($cols);

    APP::render('stock/report_view', $grid);
  }

  public function dataset_stock_ledger()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $params);
    $query = "item_kode ILIKE '%".$search."%'";
    $results = ZiUtil::search_result_jq_DB($query, $params, 'VStokLedger');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function list_stock_ledger()
  {
    $grid['folder'] = "Laporan";
    $grid['title'] = "Stok Ledger ";

    $cols = array();
    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{"name": "id", "key": true,"hidden": true}');
    $cols[] = json_decode('{ "label": "Tanggal Posting", "name": "posting_date"}');
    $cols[] = json_decode('{ "label": "Jam Posting", "name": "posting_time"}');
    $cols[] = json_decode('{ "label": "Kode Item", "name": "item_kode"}');
    $cols[] = json_decode('{ "label": "Satuan", "name": "item_uom"}');
    $cols[] = json_decode('{ "label": "Jumlah", "name": "actual_qty",
      "width": 75,
      "align": "right",
      "formatter": "integer",
      "formatoptions": { "thousandsSeparator": "," }
      }'
    );
    $cols[] = json_decode('{ "label": "Sisa Stok", "name": "qty_after_transaction",
      "width": 75,
      "align": "right",
      "formatter": "integer",
      "formatoptions": { "thousandsSeparator": "," }
      }'
    );
    $cols[] = json_decode('{ "label": "Gudang", "name": "warehouse_nama"}');
    $cols[] = json_decode('{ "label": "Harga perkiraan", "name": "valuation_rate",
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " }
      }'
    );
    $cols[] = json_decode('{ "label": "Harga Masuk", "name": "incoming_rate",
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " }
      }'
    );
    $cols[] = json_decode('{ "label": "Nilai Stok", "name": "stock_value",
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " }
      }'
    );
    $cols[] = json_decode('{ "label": "Batch", "name": "batch_no", "hidden": true}');
    $cols[] = json_decode('{ "label": "Voucher jenis", "name": "voucher_type"}');
    $cols[] = json_decode('{ "label": "Voucher #", "name": "voucher_no"}');


    $grid["cols"] = json_encode($cols);

    $grid['source_url'] = APP::urlFor('stok.dataset_stock_ledger');
    $grid['method'] = "GET";

    $grid['gridtitle'] = "Kartu Stok";

    APP::render('stock/report_view', $grid);
    }

  public function viewbalance()
  {
    $grid['folder'] = "Laporan";
    $grid['title'] = "Saldo Stok Item";

    $cols = array();
    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "label": "Kode Item", "name": "item_kode", "key": true}');
    $cols[] = json_decode('{ "label": "Nama Item", "name": "item_nama"}');
    $cols[] = json_decode('{ "label": "Saldo", "name": "balance", "width": 25,
      "align": "right",
      "formatter": "integer",
      "formatoptions": { "thousandsSeparator": "," }
      }'
    );
    $cols[] = json_decode('{ "label": "Gudang", "name": "warehouse", "hidden": true}');
    $cols[] = json_decode('{ "label": "Gudang", "name": "warehouse_nama"}');

    $grid["cols"] = json_encode($cols);

    $grid['source_url'] = APP::urlFor('stok.dataset');
    $grid['method'] = "GET";

    $grid['gridtitle'] = "Saldo Stok Item";

    APP::render('component/jqgrid_view', $grid);
  }

  public function viewbatch()
  {
    $grid['folder'] = "Laporan";
    $grid['title'] = "Saldo Stok Batch Item";

    $cols = array();
    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "Kode Item", "field": "item_kode"}');
    $cols[] = json_decode('{ "title": "Kode Batch", "field": "batch_no"}');
    $cols[] = json_decode('{ "title": "Saldo", "field": "balance"}');
    $cols[] = json_decode('{ "title": "Gudang", "field": "warehouse", "visible": false}');
    $cols[] = json_decode('{ "title": "Gudang", "field": "warehouse_nama"}');

    $grid["cols"] = json_encode($cols);

    $grid['source_url'] = APP::urlFor('stok.datasetBatch');
    $grid['method'] = "GET";

    $grid['gridtitle'] = "Saldo Stok Batch Item";

    APP::render('stock/grid_saldo_batch', $grid);
  }
}
