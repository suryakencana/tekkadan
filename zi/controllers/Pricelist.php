<?php
/**
 * Copyright (c) 11 2015 | surya
 * 13/11/15 nanang.ask@kubuskotak.com
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
 *  Pricelist.php
 */


class Pricelist_Controller extends Zi\Lock_c
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Price list / Daftar Harga";


    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "label": "ID", "name": "id", "key": true, "hidden": true}');
    $cols[] = json_decode('{ "label": "Nama", "name": "price_list_nama"}');
    $cols[] = json_decode('{ "label": "Kode Tagihan", "name": "kode_invoice"}');
    $cols[] = json_decode('{ "label": "Mata uang", "name": "currency"}');
    $cols[] = json_decode('{ "label": "Aktif", "name": "aktif", "formatter": "checkbox"}');
    $cols[] = json_decode('{ "label": "Pembelian", "name": "pembelian", "formatter": "checkbox"}');
    $cols[] = json_decode('{ "label": "Penjualan", "name": "penjualan", "formatter": "checkbox"}');


    $grid["url_add"] = App::urlFor("pricelist.a001");
    $grid["url_edit"] = App::urlFor("pricelist.v005");
    $grid["url_remove"] = App::urlFor("pricelist.d011");
    $grid["source_url"] = App::urlFor("pricelist.dataset");
    $grid["method"] = "GET";
    $grid["cols"] = json_encode($cols);

    APP::render('component/jqgrid_view', $grid);
  }

  public function dataset()
  {
    $req = APP::request();
    if ($req->isPost()) {
      $params = $req->post();
      $search = ZiUtil::is_set('search', $params);
      $query = "id = '" . $search . "'";
    } else {
      $params = $req->get();
      $search = ZiUtil::is_set('search', $params);
      $query = "price_list_nama ILIKE '%" . $search . "%'";
    }
    $results = ZiUtil::search_result_jq_DB($query, $params, 'PriceList');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function a001()
  {
    $grid['folder'] = "Stock";
    $grid['title'] = "Form Price list / Daftar Harga";
    $grid['url_submit'] = App::urlFor("pricelist.s003");
    App::render('pricelist/form_pricelist', $grid);
  }

  /**
   * POST /pricelist
   *
   */
  public function s003()
  {
    $req = App::request();
    if ($req->isPost()) {
      $post = $req->post();
      if (!empty($post["price_list_nama"])) {
        $attributes = array(
          "price_list_nama" => $post["price_list_nama"],
          "kode_invoice" => $post["kode_invoice"],
          "currency" => "IDR",
          "aktif" => isset($post["aktif"]) ? 1 : 0,
          "pembelian" => isset($post["pembelian"]) ? 1 : 0,
          "penjualan" => isset($post["penjualan"]) ? 1 : 0
        );
        $table = PriceList::table();

        if (is_null($post["gen_id"]) || $post["gen_id"] == "") {
          $table->insert($attributes);
        } else {
          $where = "price_list_nama = '" . $post["gen_id"] . "'";
          $table->update($attributes, $where);
        }
        App::flash('info', 'Data Tersimpan.');
        App::redirect('pricelist.index');
      }
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('pricelist.a001');
  }

  public function v005($id = null)
  {

    $grid['folder'] = "Stock";
    $grid['title'] = "Form Price list / Daftar Harga";
    $data = null;
    if (!is_null($id)) {
      $data = PriceList::find($id);
    }
    $grid['data'] = $data;
    $grid['url_submit'] = App::urlFor("pricelist.s003");
    App::render('pricelist/form_pricelist', $grid);
  }

  public function d011($id = null)
  {
    if (!is_null($id)) {
      $result = PriceList::find($id);
      $result->delete();
      ZiUtil::to_json(json_encode("{ success: true}"));
      return;
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('pricelist.index');
  }
}
