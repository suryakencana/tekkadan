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

class Item_Controller
{
  public function __construct()
  {

  }

  public function index()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Daftar Item";

    $cols = array();
    $cols[] = json_decode('{ "label": "Kode Item", "name": "item_kode"}');
    $cols[] = json_decode('{ "label": "Nama Item","name": "item_nama"}');
    $cols[] = json_decode('{ "label": "Grup Item","name": "item_grup"}');
    $cols[] = json_decode('{ "label": "Principal|MERK Item", "name": "item_principal"}');
    $cols[] = json_decode('{ "label": "Satuan|UOM", "name": "item_uom"}');
    $cols[] = json_decode('{ "label": "", "name": "id", "key": true, "hidden": true}');

    $grid["url_add"] = App::urlFor("item.a001");
    $grid["url_edit"] = App::urlFor("item.v005");
    $grid["url_remove"] = App::urlFor("item.d011");
    $grid["source_url"] = App::urlFor("item.dataset");
    $grid["method"] = "GET";
    $grid["cols"] = json_encode($cols);

    App::render("component/jqgrid_view", $grid);
  }

  public function dataset()
  {
    $req = APP::request();

    if ($req->isPost()) {
      $params = $req->post();
      $search = ZiUtil::is_set('search', $params);
      $query = "item_kode = '" . $search . "'";
    } else {
      $params = $req->get();
      $search = ZiUtil::is_set('search', $params);
      $query = "item_nama ILIKE '%" . $search . "%'";
    }
    $results = ZiUtil::search_result_jq_DB($query, $params, 'Item');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function grupitem()
  {
    $req = APP::request();
    $get = $req->get();
    $search = ZiUtil::is_set('search', $get);
    $query = "item_grup_nama ILIKE '%" . $search . "%'";
    $results = ZiUtil::search_result_DB($query, $get, 'ItemGrup');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  /**
   * GET /item/add
   *
   */
  public function a001()
  {
    $grid['folder'] = "<a href=\"".App::urlFor('item.index')."\">Stock</a>";
    $grid['title'] = "Form Item";
    $grid['data']['default_gudang'] = "7c87a8d69bc21df012ae8e3b17c5fff7";
    $grid['url_submit'] = App::urlFor("item.s003");

    $grid['url_item_uom'] = APP::urlFor('unitOM.dataset');
    $grid['url_item_grup'] = APP::urlFor('item.grupitem');
    $grid['url_principal'] = APP::urlFor('principal.dataset');

    $grid['url_gudang'] = APP::urlFor('warehouse.dataset');

    App::render('item/form_item',$grid);
  }

  /**
   * POST /item
   *
   */
  public function s003()
  {
    $req = App::request();
    if($req->isPost()){
      $post = $req->post();
      if(!empty($post["item_kode"])) {
        $attributes = array(
          "item_kode" => $post["item_kode"],
          "item_nama" => $post["item_nama"],
          "keterangan" => $post["keterangan"],
          "item_uom" => $post["item_uom"],
          "item_principal" => $post["item_principal"],
          "item_grup" => $post["item_grup"],
          "barcode" => $post["barcode"],
          "default_gudang" => $post["default_gudang"],
          "min_order_qty" => $post["min_order_qty"],
          "re_order_qty" => $post["re_order_qty"],
          "re_order_level" => $post["re_order_level"],
          "has_batch_no" => 0,
          "is_obat" => ZiUtil::check_bool_int($post["is_obat"]),
          "disabled" => ZiUtil::check_bool_int($post["disabled"])
        );
        $table = Item::table();

        if (is_null($post["gen_id"]) || $post["gen_id"] == "") {
          $attributes["id"] = "ITEM-".ZiUtil::GetNowID();
          $table->insert($attributes);
        } else {
          $where = "id = '" . $post["gen_id"] . "'";
          $table->update($attributes, $where);
        }
        App::flash('info', 'Data Tersimpan.');
        App::redirect('item.index');
      }
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('item.a001');
  }

  public function addTemp()
  {
    $req = App::request();
    $get = $req->get();
    $attributes = array(
      "entry_jenis_nama" => $get["nama"],
      "entry_jenis_id" =>ZiUtil::GetTransID()
    );
    $table = StokEntryJenis::table();
    $table->insert($attributes);
  }

  public function v005($id = null) {
    $grid['folder'] = "<a href=\"".App::urlFor('item.index')."\">Stock</a>";
    $grid['title'] = "Form Item";
//    $grid['data']['item_kode'] = "ITEM-".ZiUtil::GetNowID();
    $grid['url_itemprice'] = App::urlFor("itemprice.filter");

    $grid['url_submit'] = App::urlFor("item.s003");
    $grid['url_item_uom'] = APP::urlFor('unitOM.dataset');
    $grid['url_item_grup'] = APP::urlFor('item.grupitem');
    $grid['url_principal'] = APP::urlFor('principal.dataset');
    $grid['url_gudang'] = APP::urlFor('warehouse.dataset');
    $data = null;
    if(!is_null($id)){
      $data = Item::find($id);
    }
    $grid['data'] = $data;

    App::render('item/form_item',$grid);
  }

  public function d011($id = null){
    if(!is_null($id)) {
      $result = Item::find($id);
      $result->delete();
      ZiUtil::to_json(json_encode("{ success: true}"));
      return;
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('item.index');
  }
}
