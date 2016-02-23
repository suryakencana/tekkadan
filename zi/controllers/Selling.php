<?php
/**
 * Copyright (c) 11 2015 | surya
 * 23/11/15 nanang.ask@kubuskotak.com
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
 *  Selling.php
 */


class Selling_Controller extends \Zi\Lock_c
{

  public function __construct()
  {
    parent::__construct();
  }

  public function pricelist()
  {
    $req = APP::request();
    $params = $req->get();
    $item_kode = ZiUtil::is_set('item_kode', $params);
    $price_list = ZiUtil::is_set('price_list', $params);
    $query = "item_kode = '" . $item_kode . "' AND price_list ='" . $price_list . "'";

    $results = ZiUtil::search_result_DB($query, $params, 'ItemPrice');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function dosis()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $params);
    $query = "dosis ILIKE '%" . $search . "%'";
    $results = ZiUtil::search_result_DB($query, $params, 'Dosis');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function dokter()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $params);
    $query = "pgw_nama ILIKE '%" . $search . "%' AND pgw_jenis_pegawai = 1";
    $results = ZiUtil::search_result_DB($query, $params, 'Dokter');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function positem()
  {
    $grid['folder'] = "Penjualan";
    $grid['title'] = "Entri penjualan item";

    $grid['url_item'] = APP::urlFor('item.dataset');
    $grid['url_item_uom'] = APP::urlFor('unitOM.dataset');
    $grid['url_item_batch'] = APP::urlFor('batch.stockEntries');
    $grid['url_dosis'] = APP::urlFor('selling.dosis');
    $grid['url_stok_balance'] = APP::urlFor('stok.balance');
    $grid["url_price_list"] = App::urlFor("selling.pricelist");

    $grid['url_gudang'] = APP::urlFor('warehouse.dataset');
    App::render('selling/form_penjualan', $grid);
  }

  public function pos()
  {
    $grid['folder'] = "Penjualan";
    $grid['title'] = "Point Of Sale";
    $grid['cashier'] = $this->user['name'];
    $grid['data']['invoice'] = "SINV-";
    $grid['data']['price_list'] = "SWADANA";

    $cols = array();
    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "label": "id", "name": "id", "key": true, "hidden": true}');
    $cols[] = json_decode('{ "label": "Kode Item", "name": "item_kode"}');
    $cols[] = json_decode('{ "label": "Nama Item","name": "item_nama"}');
    $cols[] = json_decode('{ "label": "UOM", "name": "item_uom", "hidden": true}');
    $cols[] = json_decode('{ "label": "Dosis", "name": "dosis", "hidden": true}');
    $cols[] = json_decode('{ "label": "Batch no", "name": "item_batch", "hidden": true}');
    $cols[] = json_decode('{ "label": "Keterangan", "name": "keterangan", "hidden": true}');
    $cols[] = json_decode('{ "label": "Dari Gudang", "name": "from_warehouse", "hidden": true}');
    $cols[] = json_decode('{ "label": "Dari Gudang", "name": "from_warehouse_nama"}');
    $cols[] = json_decode('{ "label": "Actual Qty", "name": "actual_qty", "hidden": true}');
    $cols[] = json_decode('{ "label": "Qty", "name": "item_qty",
      "width": 75,
      "align": "right",
      "formatter": "integer",
      "formatoptions": { "thousandsSeparator": "," },
      "editable": true,
      "editrules": {
        "number": true,
        "minValue": 0,
        "maxValue": 10000,
        "required": true
      }
    }'
  );
    $cols[] = json_decode('{ "label": "Harga Dasar", "name": "basic_rate", "hidden": true}');
    $cols[] = json_decode('{ "label": "Harga Jual", "name": "item_price",
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " },
        "editable": true,
        "editrules": {
          "number": true
        }
      }'
    );
    $cols[] = json_decode('{ "label": "Total Harga", "name": "item_amount",
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
    $grid["cols"] = json_encode($cols);

    $grid['print_nota'] = APP::urlFor('selling.print_invoice');
    $grid['url_index'] = APP::urlFor('selling.pos');
    $grid['url_submit'] = APP::urlFor('selling.s003');
    $grid['url_submit_status'] = APP::urlFor('selling.submit_status');
    $grid['url_item'] = APP::urlFor('item.dataset');
    $grid['url_stok_balance'] = APP::urlFor('stok.balance');
    $grid['url_reg_pasien'] = APP::urlFor('pasien.reg_pasien');
    $grid['url_pasien'] = APP::urlFor('pasien.dataset');
    $grid['url_dokter'] = APP::urlFor('selling.dokter');
    $grid['url_price_list'] = APP::urlFor('pricelist.dataset');
    $grid["url_price_sell"] = App::urlFor("selling.pricelist");
    $grid['modal_form'] = APP::urlFor('selling.positem');
    $grid['gridtitle'] = "Daftar pembelian item";
    APP::render('selling/pos', $grid);
  }

  public function s003()
  {
    try {
      $req = App::request();

      if ($req->isPost()) {
        $post = $req->post();
        $rows = json_decode($post['rows'], true);

        // Generate Kode Sales Invoice (SINV-030-20151204-xxxxx)
        $kode_invoice = $post["kode_invoice"];
        $find_invoice = sprintf("SINV-%s-%s-", $kode_invoice, ZiUtil::GetDateNow());
    		$query = sprintf("id ILIKE '%s%s'", $find_invoice, '%');
    		//var_dump($query);
    		$condition = array('conditions' => $query, 'limit' => 1, 'offset' => 0, 'order' => 'id DESC');
    		$last_kode_inv = SalesApotik::all($condition);
    		//var_dump($last_kode_inv);
    		if(is_null($last_kode_inv)) {
    			$last_kode_inv = "00000";
    		}
    		$SaleKodeGen = sprintf("SINV-%s-%s-%s",
    		$kode_invoice, ZiUtil::GetDateNow(),
    		str_pad(((int)$last_kode_inv)+1, 5, "0", STR_PAD_LEFT));
    		//var_dump($SaleKodeGen);
        $total_amount = 0;

        foreach($rows as $row) {
          $amount = $row["item_amount"];
          $attr_detail = array(
            "created" => date("Y-m-d H:i:s"),
            "parent" => $SaleKodeGen,
            "item_kode" => $row["item_kode"],
            "item_nama" => $row["item_nama"],
            "item_uom" => $row["item_uom"],
            "item_price" => $row["item_price"],
            "warehouse" => $row["from_warehouse"],
            "dosis" => $row["dosis"],
            "actual_qty" => $row["item_qty"],
            "basic_rate" => $row["basic_rate"],
            "batch_no" => $row["item_batch"],
            "amount" => $amount
          );

          $voucher_detail_no = ZiUtil::GetNowID();
          $attr_detail["id"] = $voucher_detail_no;
          $tableDetail = DetailApotik::table();
          $tableDetail->insert($attr_detail);

          $attr_folio = array(
            "fol_id" => $voucher_detail_no,
            "fol_jenis" => "T",
            "fol_nama" => $row["item_nama"],
            "fol_jumlah" => $row["item_qty"],
            "fol_nominal" => $amount,
            "fol_nominal_satuan" => $row["item_price"],
            "fol_waktu" => date("Y-m-d H:i:s"),
            "id_biaya" => $row["item_kode"],
            "id_biaya_tambahan" => 0,
            "id_cust_usr" => $post["cust_id"],
            "id_reg" => empty($post["reg_id"]) ?  "" : $post["reg_id"]
          );
          $table_folio = KlinikFolio::table();
          $table_folio->insert($attr_folio);

          // outgoing
          if (isset($row["from_warehouse"]) && !empty($row["from_warehouse"])) {

            $stock_queue = new ZiStockQueue();

            $stock_queue->outgoing_stock(
              $row["item_kode"],
              $row["from_warehouse"],
              $row["item_qty"],
              $row["item_batch"]);

            $valuation_rate = ZiStockQueue::valuation_rate($row["item_kode"], $row["from_warehouse"], $row["item_batch"]);

            $qty_after_trans = ZiUtil::check_int($row["actual_qty"]) - ZiUtil::check_int($row["item_qty"]);
            $stock_value_diff = (0 - ZiUtil::check_int($row["item_qty"])) * $valuation_rate;
            $stock_value = $qty_after_trans * $valuation_rate;

            // $valuation_rate diperoleh dari total all incoming stock
            // saat nya entry data stock ledger
            $stockLedger = new ZiStockLedger();
            $stockLedger->insert_db(
              $row["item_kode"],
              "Sales Apotik",
              $SaleKodeGen,
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
          "fiscal_year" => date('Y'),
          "company" => "RSMM",
          "posting_date" => date("Y-m-d H:i:s"),
          "posting_time" => date("H:i:s"),
          "created" => date("Y-m-d H:i:s"),
          "modified" => date("Y-m-d H:i:s"),
          "pasien_reg_no" => $post["reg_no"],
          "pasien_nama" => $post["pasien_nama"],
          "pasien_alamat" => $post["pasien_alamat"],
          "pasien_jenis" => $post["pasien_jenis"],
          "price_list" => $post["price_list"],
          "dokter" => $post["dokter"],
          "keterangan" => $post["keterangan"],
          "discount_rate" => 0,
          "kasir" => $post["kasir"],
          "payment" => $post["bayar_total"]
        );

        $attr_master["amount"] = $total_amount;
        $attr_master["id"] = $SaleKodeGen;
        $table = SalesApotik::table();
        $table->insert($attr_master);

        $dataset = array();
        $dataset["success"] = true;
        $dataset["kode_invoice"] = $SaleKodeGen;
        ZiUtil::to_json(json_encode($dataset));

        /*App::flash('info', 'Data Tersimpan.');
        App::redirect('selling.pos');*/
      }
    } catch (Exception $e) {
      // echo 'Caught exception: ', $e->getMessage(), "\n";
      header('HTTP/1.1 500 Internal Server Booboo');
      header('Content-Type: application/json; charset=UTF-8');
      die(json_encode(array('message' => $e->getMessage(), 'code' => 1337)));
    }
  }

  public function submit_status()
  {
    try {
      $req = App::request();

      if ($req->isPost()) {
        $post = $req->post();

        // Generate Kode Sales Invoice (SINV-030-20151204-xxxxx)
        $kode_invoice = $post["kode_tagihan"];
        App::flash('info', 'Data Tersimpan #-' .$kode_invoice);
      }
    } catch (Exception $e) {
      App::flash('error', $e);
    }

    APP::redirect('selling.pos');
  }

  public function print_invoice($id)
  {
    $sales = SalesApotik::find($id);
    $data["title"] = $this->template_header;

    $data["invoice"] = $id;
    $data["posting_date"] = $sales->posting_date;
    $data["posting_time"] = $sales->posting_time;
    $data["pasien_reg_no"] = $sales->pasien_reg_no;
    $data["pasien_nama"] = $sales->pasien_nama;
    $data["pasien_alamat"] = $sales->pasien_alamat;
    $data["price_list"] = $sales->price_list;
    $data["dokter"] = $sales->dokter;
    $data["amount"] = $sales->amount;
    $data["payment"] = $sales->payment;
    $data["kasir"] = $sales->kasir;

    $detail = DetailApotik::all(array('conditions' => "parent = '" . $id . "'" ));

    $data["rows"] = $detail;
    APP::render('selling/print_invoice_apotik', $data);
    // $paper = array(array(0,0,432,324), "portrait");
    // $dompdf = APP::print_render('selling/print_invoice_apotik', $data, $paper);

    // $pdf = $dompdf->get_canvas();
    // $fontMetrics = $dompdf->getFontMetrics();
    // // $font = $fontMetrics->getSystemFonts();
    // $font = $fontMetrics->getFont('helvetica');
    // // If verdana isn't available, we'll use sans-serif.
    // // if (!isset($font)) { $fontMetrics->getFont("sans-serif"); }
    // $size = 6;
    // $color = array(0,0,0);

    // $text_height = $fontMetrics->getFontHeight($font, $size);

    // $foot = $pdf->open_object();

    // $w = $pdf->get_width();
    // $h = $pdf->get_height();
    // $y = $h - 2 * $text_height - 24;

    // $pdf->line(16, $y, $w - 16, $y, $color, 1);

    // $y += $text_height;

    // $text = sprintf("# %s", $id);
    // $pdf->page_text(16, $y, $text, $font, $size, $color);

    // $text = "Page {PAGE_NUM} of {PAGE_COUNT}";

    // // Center the text
    // $width = $fontMetrics->getTextWidth("Page 1 of 2", $font, $size);
    // $pdf->page_text($w / 2 - $width / 2, $y, $text, $font, $size, $color);

    // $pdf->close_object();
    // $pdf->add_object($foot, "all");

    // // $watermark = $pdf->open_object();
    // // $pdf->set_opacity(0.87);
    // // $width = Font_Metrics::get_text_width("COPY", Font_Metrics::get_font("verdana", "bold"), 110);
    // // $pdf->text(($w / 2 - $width / 2) + 10, $h / 2, "COPY", Font_Metrics::get_font("verdana", "bold"),
    // //   110, array(0.98, 0.98, 0.98), 0, 13.9, -37);

    // // $pdf->close_object();
    // // $pdf->add_object($watermark, "all");


    // $dompdf->stream(sprintf("%s.pdf", $id), array("Attachment"=>0));
  }

  public function export()
  {
    try {
      $req = App::request();
      $params = $req->get();
      if(!empty($params['cx'])) {
        switch ($params['cx']) {
          case 'xls':
            $this->excel($params);
            break;
          case 'pt':
            $this->print_harian($params);
            break;
          case 'pdf':
            $this->pdf($params);
            break;
          default:
            # code...
            break;
        }
      }
    } catch (Exception $e) {
      App::flash('error', $e);
    }
  }

  private function excel($params)
  {
    try {
      $condition = array();
      $data = array();
      $dataExcel = array();
      if(!empty($params['a']) && !empty($params['z']) && !empty($params['cdate'])) {
        $col_date = $params['cdate'];
        $query = sprintf("%s BETWEEN '%s' and '%s' ", $params['cdate'], $params['a'], $params['z']);
        $condition['conditions'] = $query;
      }

      $sales = SalesApotik::all($condition);

      $dataExcel["B7:C7"] = array('align' => '', 'value' => sprintf("%s sampai dengan %s", $params['a'], $params['z']), 'border' => '');

      $line = 10;
      $i = 1;
      $total = 0;
      foreach ($sales as $row)
      {
        $dataExcel["A".$line] = array('align' => '', 'value' => $i, 'border' => 'all');
        $dataExcel["B".$line] = array('align' => 'center', 'value' => $row->posting_date, 'border' => 'all');
        $dataExcel["C".$line] = array('align' => 'center', 'value' => $row->id, 'border' => 'all');
        $dataExcel["D".$line] = array('align' => 'center', 'value' => $row->pasien_reg_no, 'border' => 'all');
        $dataExcel["E".$line] = array('align' => 'center', 'value' => $row->pasien_nama, 'border' => 'all');
        $dataExcel["F".$line] = array('align' => 'center', 'value' => $row->price_list, 'border' => 'all');
        $dataExcel["G".$line] = array('align' => 'center', 'value' => $row->kasir, 'border' => 'all');
        $dataExcel["H".$line] = array('align' => 'right', 'value' => $row->amount, 'border' => 'all', 'cur_format' => true);
        $line++; $i++;
        $total += $row->amount;
      }
      $dataExcel["A".$line.":G".$line] = array('align' => 'right', 'value' => 'Total', 'border' => 'all');
      $dataExcel["H".$line] = array('align' => 'right', 'value' => $total, 'border' => 'all', 'cur_format' => true);
      $dataExcel["I".$line.":L".$line] = array('align' => '', 'value' => '', 'border' => 'all');

      $fileDetail = ZiUtil::defaultFileDetail();

      $fileDetail->template = 'assets/temp/lap_invoice.xlsx';
      $fileDetail->title = "Laporan Order";
      $fileDetail->subject = "Laporan Order";
      $fileDetail->desc = "Laporan Order RSMM";
      $fileDetail->sheetTitle = "Order ";
      $fileDetail->filename = "LPH-".sprintf("%s-sd-%s", $params['a'], $params['z']).".xlsx";
      $filename = "LPH-".sprintf("%s-sd-%s", $params['a'], $params['z']).".xlsx";
      ZiUtil::generate($filename, $dataExcel, $fileDetail);
    } catch (Exception $e) {
      App::flash('error', $e);
    }
  }

  private function pdf($params)
  {
    try {
      $condition = array();
      $data = array();
      if(!empty($params['a']) && !empty($params['z']) && !empty($params['cdate'])) {
  			$col_date = $params['cdate'];
  			$query = sprintf("%s BETWEEN '%s' and '%s' ", $params['cdate'], $params['a'], $params['z']);
  			$condition['conditions'] = $query;
  		}

      $sales = SalesApotik::all($condition);

      $data["rows"] = $sales;
      $data["title"] = $this->template_header;
      $data["posting_range"] = sprintf(" %s sampai %s", $params['a'], $params['z']);
      $data["params"] = sprintf("a=%s&z=%s&cdate=%s", $params['a'], $params['z'], "posting_date");
      $data["source_url"] = APP::urlFor('selling.export');

    } catch (Exception $e) {
      App::flash('error', $e);
    }

    $paper = array("a4", "portrait");
    $dompdf = APP::print_render('selling/print_laporan_harian', $data, $paper);

    $pdf = $dompdf->get_canvas();
    $fontMetrics = $dompdf->getFontMetrics();
    // $font = $fontMetrics->getSystemFonts();
    $font = $fontMetrics->getFont('helvetica');
    // If verdana isn't available, we'll use sans-serif.
    // if (!isset($font)) { $fontMetrics->getFont("sans-serif"); }
    $size = 6;
    $color = array(0,0,0);

    $text_height = $fontMetrics->getFontHeight($font, $size);

    $foot = $pdf->open_object();

    $w = $pdf->get_width();
    $h = $pdf->get_height();
    $y = $h - 2 * $text_height - 24;

    $pdf->line(16, $y, $w - 16, $y, $color, 1);

    $y += $text_height;

    $text = sprintf("# %s", $id);
    $pdf->page_text(16, $y, $text, $font, $size, $color);

    $text = "Page {PAGE_NUM} of {PAGE_COUNT}";

    // Center the text
    $width = $fontMetrics->getTextWidth("Page 1 of 2", $font, $size);
    $pdf->page_text($w / 2 - $width / 2, $y, $text, $font, $size, $color);

    $pdf->close_object();
    $pdf->add_object($foot, "all");

    // $watermark = $pdf->open_object();
    // $pdf->set_opacity(0.87);
    // $width = Font_Metrics::get_text_width("COPY", Font_Metrics::get_font("verdana", "bold"), 110);
    // $pdf->text(($w / 2 - $width / 2) + 10, $h / 2, "COPY", Font_Metrics::get_font("verdana", "bold"),
    //   110, array(0.98, 0.98, 0.98), 0, 13.9, -37);

    // $pdf->close_object();
    // $pdf->add_object($watermark, "all");


    $dompdf->stream(sprintf("%s.pdf", $id), array("Attachment"=>0));
  }

  private function print_harian($params)
  {
    try {
      $condition = array();
      $data = array();
      if(!empty($params['a']) && !empty($params['z']) && !empty($params['cdate'])) {
  			$col_date = $params['cdate'];
  			$query = sprintf("%s BETWEEN '%s' and '%s' ", $params['cdate'], $params['a'], $params['z']);
  			$condition['conditions'] = $query;
  		}

      $sales = SalesApotik::all($condition);

      $data["rows"] = $sales;
      $data["title"] = $this->template_header;
      $data["posting_range"] = sprintf(" %s sampai %s", $params['a'], $params['z']);
      $data["params"] = sprintf("a=%s&z=%s&cdate=%s", $params['a'], $params['z'], "posting_date");
      $data["source_url"] = APP::urlFor('selling.export');

    } catch (Exception $e) {
      App::flash('error', $e);
    }

    APP::render('selling/print_laporan_harian', $data);
  }

  public function dataset_penjualan()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $params);
    $query = "pasien_nama ILIKE '%".$search."%' and is_canceled = 0";
    $results = ZiUtil::search_result_jq_DB($query, $params, 'SalesApotik');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function detail_penjualan($id)
  {
    $query = "parent = '".$id."'";
    $results = SalesApotikDetail::all(array('conditions' => $query));
    $total = SalesApotikDetail::count(array('conditions' => $query));
    return ZiUtil::dataset_json($results, $total);
  }

  public function list_penjualan()
  {
    $grid['folder'] = "Laporan";
    $grid['title'] = "Penjualan";

    $cols = array();
    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "label": "Nota", "name": "id", "key": true}');
    $cols[] = json_decode('{ "label": "Tanggal Posting", "name": "posting_date", "sortable": true}');
    $cols[] = json_decode('{ "label": "Jam Posting", "name": "posting_time", "sortable": true}');
    $cols[] = json_decode('{ "label": "Reg. no", "name": "pasien_reg_no", "sortable": true}');
    $cols[] = json_decode('{ "label": "Nama Pasien", "name": "pasien_nama", "sortable": true}');
    $cols[] = json_decode('{ "label": "Alamat Pasien", "name": "pasien_alamat"}');
    $cols[] = json_decode('{ "label": "Jenis Tagihan", "name": "price_list"}');
    $cols[] = json_decode('{ "label": "Kasir", "name": "kasir"}');
    $cols[] = json_decode('{ "label": "Total", "name": "amount",
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " }
      }'
    );
    $cols[] = json_decode('{ "label": "Bayar", "name": "payment",
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

    $grid['source_url'] = APP::urlFor('selling.dataset_penjualan');

    $grid['url_print'] = APP::urlFor('selling.print_invoice');
    $grid['url_harian'] = APP::urlFor('selling.print_invoice');
    $grid['url_cancel'] = APP::urlFor('selling.d011');
    $grid['method'] = "GET";

    $grid['gridtitle'] = "Penjualan";
    // untuk detail penjualan
    $grid['detail_grid_url'] = APP::urlFor('selling.detail_penjualan');
    $grid['detail_grid_title'] = "Invoice #-";

    $cols = array();
    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "label": "id", "name": "id", "key": true, "hidden": true}');
    $cols[] = json_decode('{ "label": "Kode Item", "name": "item_kode", "width": 100}');
    $cols[] = json_decode('{ "label": "Nama Item","name": "item_nama"}');
    $cols[] = json_decode('{ "label": "UOM", "name": "item_uom", "hidden": true}');
    $cols[] = json_decode('{ "label": "Dosis", "name": "dosis", "hidden": true}');
    $cols[] = json_decode('{ "label": "Batch no", "name": "batch_no", "hidden": true}');
    $cols[] = json_decode('{ "label": "Dari Gudang", "name": "warehouse", "hidden": true}');
    $cols[] = json_decode('{ "label": "Qty", "name": "actual_qty",
        "width": 75,
        "align": "left",
        "formatter": "integer",
        "formatoptions": { "thousandsSeparator": "," },
        "editable": true,
        "editrules": {
          "number": true,
          "minValue": 0,
          "maxValue": 10000,
          "required": true
        }
      }'
    );
    $cols[] = json_decode('{ "label": "Harga Dasar", "name": "basic_rate", "hidden": true}');
    $cols[] = json_decode('{ "label": "Harga Jual", "name": "item_price",
      "width": 85,
      "align": "right",
      "formatter": "currency",
      "formatoptions": {
        "decimalSeparator": ".",
        "decimalPlaces": "2",
        "thousandsSeparator": ",",
        "prefix": "Rp. " },
        "editable": true,
        "editrules": {
          "number": true
        }
      }'
    );
    $cols[] = json_decode('{ "label": "Total Harga", "name": "amount",
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

    APP::render('selling/report_view', $grid);
  }

  public function d011($id = null)
  {
    if(!empty($id)) {
      $req = App::request();
      if ($req->isPost()) {
        $post = $req->post();
        // url_cancel
        $sales = SalesApotik::find($id);
        if(!empty($sales)) {
          $sales->is_canceled = 1;
          $sales->save();
          //jika berhasil hapus record
          $query = "parent = '".$id."'";
          $results = SalesApotikDetail::all(array('conditions' => $query));
          if(!empty($results)) {
              foreach ($results as $row) {
                //jika berhasil hapus record
                $folio = KlinikFolio::find($row->id);
                $folio->delete();
              }
          }
          ZiUtil::to_json(json_encode("{ success: true}"));
          return;
        }
      }
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('selling.list_penjualan');
  }
}
