<?php
/**
 * Copyright (c) 11 2015 | surya
 * 14/11/15 nanang.ask@kubuskotak.com
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
 *  Itemprice.php
 */

class Itemprice_Controller extends Zi\Lock_c
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Daftar Item Price";

    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "Kode Item", "field": "item_kode"}');
    $cols[] = json_decode('{ "title": "Nama Item", "field": "item_nama"}');
    $cols[] = json_decode('{ "title": "Price List", "field": "price_list"}');
    $cols[] = json_decode('{ "title": "Harga", "field": "price_list_rate"}');
    $cols[] = json_decode('{ "title": "", "field": "id"}');


    $grid["url_add"] = App::urlFor("itemprice.a001");
    $grid["url_edit"] = App::urlFor("itemprice.v005");
    $grid["url_remove"] = App::urlFor("itemprice.d011");
    $grid["source_url"] = App::urlFor("itemprice.dataset");
    $grid["method"] = "GET";
    $grid["cols"] = json_encode($cols);

    APP::render('itemprice/grid_itemprice', $grid);
  }

  public function dataset()
  {
    $req = APP::request();
    if ($req->isPost()) {
      $params = json_decode($req->getBody(), 1);
      $anchor = $params['anchor'];
      $value = $params['value'];
      $query = "$anchor = '$value'";
    } else {
      $params = $req->get();
      $search = ZiUtil::is_set('search', $params);
      $query = "item_kode ILIKE '%" . $search . "%'";
    }

    $results = ZiUtil::search_result_DB($query, $params, 'ItemPriceList');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function filter()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Daftar Item Price";

    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "Kode Item", "field": "item_kode"}');
    $cols[] = json_decode('{ "title": "Price List", "field": "price_list"}');
    $cols[] = json_decode('{ "title": "Harga", "field": "price_list_rate"}');
    $cols[] = json_decode('{ "title": "", "field": "id", "visible": false}');

    $req = APP::request();
    if ($req->isPost()) {
      $params = $req->post();
      $grid["anchor"] = $params['anchor'];
      $grid["value"] = $params['value'];
    }
    $grid["url_add"] = App::urlFor("itemprice.a001");
    $grid["url_edit"] = App::urlFor("itemprice.v005");
    $grid["url_remove"] = App::urlFor("itemprice.d011");
    $grid["source_url"] = App::urlFor("itemprice.dataset");
    $grid["method"] = "POST";
    $grid["cols"] = json_encode($cols);

    APP::render('itemprice/grid_itemprice', $grid);
  }

  public function a001()
  {
    $grid['folder'] = "Stock";
    $grid['title'] = "Form itemprice / Brand Item";
    $grid['url_submit'] = App::urlFor("itemprice.s003");

    $grid['url_price_list'] = APP::urlFor('pricelist.dataset');
    $grid['url_item'] = APP::urlFor('item.dataset');

    App::render('itemprice/form_itemprice',$grid);
  }

  /**
   * POST /itemprice
   *
   */
  public function s003()
  {
    $req = App::request();
    if($req->isPost()){
      $post = $req->post();
      if(!empty($post["price_list"])) {
        $attributes = array(
          "item_kode" => $post["item_kode"],
          "price_list_rate" => $post["price_list_rate"],
          "item" => $post["item"],
          "price_list" => $post["price_list"]
        );
        $table = ItemPrice::table();

        if (is_null($post["gen_id"]) || $post["gen_id"] == "") {
          $attributes["id"] = "ITEM-PRICE-".ZiUtil::GetNowID();
          $table->insert($attributes);
        } else {
          $where = "id = '" . $post["gen_id"] . "'";
          $table->update($attributes, $where);
        }
        App::flash('info', 'Data Tersimpan.');
        App::redirect('itemprice.index');
      }
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('itemprice.a001');
  }

  public function v005($id = null) {

    $grid['folder'] = "Stock";
    $grid['title'] = "Form itemprice / Brand Item";
    $grid['url_submit'] = App::urlFor("itemprice.s003");
    $data = null;
    if(!is_null($id)){
      $data = ItemPriceList::find($id);
    }
    $grid['data'] = $data;

    $grid['url_price_list'] = APP::urlFor('pricelist.dataset');
    $grid['url_item'] = APP::urlFor('item.dataset');
    App::render('itemprice/form_itemprice',$grid);
  }

  public function d011($id = null){
    if(!is_null($id)) {
      $result = ItemPrice::find($id);
      $result->delete();
      ZiUtil::to_json(json_encode("{ success: true}"));
      return;
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('itemprice.index');
  }
}
