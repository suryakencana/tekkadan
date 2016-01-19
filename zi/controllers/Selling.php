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
    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "id", "field": "id", "visible": false}');
    $cols[] = json_decode('{ "title": "Kode Item", "field": "item_kode"}');
    $cols[] = json_decode('{ "title": "Nama Item","field": "item_nama"}');
    $cols[] = json_decode('{ "title": "UOM", "field": "item_uom", "visible": false}');
    $cols[] = json_decode('{ "title": "Dosis", "field": "dosis", "visible": false}');
    $cols[] = json_decode('{ "title": "Batch no", "field": "item_batch", "visible": false}');
    $cols[] = json_decode('{ "title": "Keterangan", "field": "keterangan", "visible": false}');
    $cols[] = json_decode('{ "title": "Dari Gudang", "field": "from_warehouse", "visible": false}');
    $cols[] = json_decode('{ "title": "Dari Gudang", "field": "from_warehouse_nama"}');
    $cols[] = json_decode('{ "title": "Actual Qty", "field": "actual_qty", "visible": false}');
    $cols[] = json_decode('{ "title": "Qty", "field": "item_qty"}');
    $cols[] = json_decode('{ "title": "Harga Dasar", "field": "basic_rate", "visible": false}');
    $cols[] = json_decode('{ "title": "Harga Jual", "field": "item_price"}');
    $cols[] = json_decode('{ "title": "Total Harga", "field": "item_amount"}');
    $grid["cols"] = json_encode($cols);

    $grid['print_nota'] = APP::urlFor('selling.print_invoice');
    $grid['url_index'] = APP::urlFor('selling.pos');
    $grid['url_submit'] = APP::urlFor('selling.s003');
    $grid['url_submit_status'] = APP::urlFor('selling.submit_status');
    $grid['url_pasien'] = APP::urlFor('pasien.reg_pasien');
    $grid['url_dokter'] = APP::urlFor('selling.dokter');
    $grid['url_price_list'] = APP::urlFor('pricelist.dataset');
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
        $find_invoice = sprintf("SINV-%s-%d-", $kode_invoice, ZiUtil::GetDateNow());
    		$query = sprintf("id ILIKE '%s%s'", $find_invoice, '%');
    		//var_dump($query);
    		$condition = array('conditions' => $query, 'limit' => 1, 'offset' => 0, 'order' => 'id DESC');
    		$last_kode_inv = SalesApotik::all($condition);
    		//var_dump($last_kode_inv);
    		if(is_null($last_kode_inv)) {
    			$last_kode_inv = "00000";
    		}
    		$SaleKodeGen = sprintf("SINV-%s-%d-%s",
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
              $SaleKodeGen,
              "Sales Apotik",
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
      echo 'Caught exception: ', $e->getMessage(), "\n";
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
    $data["title"] = "<div>
<div>APOTEK RUMAH SAKIT MATA MASYARAKAT</div>
<div>JAWA TIMUR</div>
<div>JL. GAYUNG KEBONSARI TIMUR 49</div>
<div>SURABAYA</div>
      </div>";

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

    $paper = array(array(0,0,432,324), "portrait");
    $dompdf = APP::print_render('selling/print_invoice_apotik', $data, $paper);

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

  public function dataset_penjualan()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $params);
    $query = "pasien_nama ILIKE '%".$search."%'";
    $results = ZiUtil::search_result_DB($query, $params, 'SalesApotik');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function list_penjualan()
  {
    $grid['folder'] = "Laporan";
    $grid['title'] = "Penjualan";

    $cols = array();
    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "Nota", "field": "id"}');
    $cols[] = json_decode('{ "title": "Tanggal Posting", "field": "posting_date"}');
    $cols[] = json_decode('{ "title": "Jam Posting", "field": "posting_time"}');
    $cols[] = json_decode('{ "title": "Reg. no", "field": "pasien_reg_no"}');
    $cols[] = json_decode('{ "title": "Nama Pasien", "field": "pasien_nama"}');
    $cols[] = json_decode('{ "title": "Alamat Pasien", "field": "pasien_alamat"}');
    $cols[] = json_decode('{ "title": "Jenis Tagihan", "field": "price_list"}');
    $cols[] = json_decode('{ "title": "Kasir", "field": "kasir"}');
    $cols[] = json_decode('{ "title": "Total", "field": "amount", "align": "right"}');
    $cols[] = json_decode('{ "title": "Bayar", "field": "payment", "align": "right"}');

    $grid["cols"] = json_encode($cols);

    $grid['source_url'] = APP::urlFor('selling.dataset_penjualan');
    $grid['method'] = "GET";

    $grid['gridtitle'] = "Penjualan";

    APP::render('selling/grid_pos', $grid);
  }
}
