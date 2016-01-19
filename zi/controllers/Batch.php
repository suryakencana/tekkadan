<?php
/**
 * Copyright (c) 11 2015 | surya
 * 16/11/15 nanang.ask@kubuskotak.com
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
 *  .php
 */


class Batch_Controller extends \Zi\Lock_c
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Daftar Batch";

    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "Kode Item", "field": "item_kode"}');
    $cols[] = json_decode('{ "title": "Tanggal Berakhir", "field": "expiry_date"}');
    $cols[] = json_decode('{ "title": "", "field": "id"}');

    $grid["url_add"] = App::urlFor("batch.a001");
    $grid["url_edit"] = App::urlFor("batch.v005");
    $grid["url_remove"] = App::urlFor("batch.d011");
    $grid["source_url"] = App::urlFor("batch.dataset");

    $grid["method"] = "GET";
    $grid["cols"] = json_encode($cols);

    APP::render('batch/grid_batch', $grid);
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
      $query = "item ILIKE '%" . $$search . "%'";
    }
    $results = ZiUtil::search_result_DB($query, $params, 'Batch');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function stockEntries()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $params);
    $item_kode = ZiUtil::is_set('item_kode', $params);
    $query = "item ILIKE '%" . $search . "%' AND item_kode ='".$item_kode."'";
    $results = ZiUtil::search_result_DB($query, $params, 'Batch');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function filter()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Daftar Item Price";

    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "Kode Item", "field": "item_kode"}');
    $cols[] = json_decode('{ "title": "Tanggal Berakhir", "field": "expiry_date"}');
    $cols[] = json_decode('{ "title": "", "field": "id"}');

    $req = APP::request();
    if ($req->isPost()) {
      $params = $req->post();
      $grid["anchor"] = $params['anchor'];
      $grid["value"] = $params['value'];
    }
    $grid["url_add"] = App::urlFor("batch.a001");
    $grid["url_edit"] = App::urlFor("batch.v005");
    $grid["url_remove"] = App::urlFor("batch.d011");
    $grid["source_url"] = App::urlFor("batch.dataset");
    $grid["method"] = "POST";
    $grid["cols"] = json_encode($cols);

    APP::render('batch/grid_batch', $grid);
  }

  public function a001()
  {
    $grid['folder'] = "Stock";
    $grid['title'] = "Form batch Item";
    $grid['url_submit'] = App::urlFor("batch.s003");

    $grid['url_item'] = APP::urlFor('item.dataset');

    App::render('batch/form_batch',$grid);
  }

  /**
   * POST /batch
   *
   */
  public function s003()
  {
    $req = App::request();
    if($req->isPost()){
      $post = $req->post();
      if(!empty($post["item_kode"]) && !empty($post["batch_kode"])) {
        $attributes = array(
          "item_kode" => $post["item_kode"],
          "item" => $post["item"],
          "keterangan" => $post["keterangan"],
          "expiry_date" => $post["expiry_date"]
        );
        $table = Batch::table();

        if (is_null($post["gen_id"]) || $post["gen_id"] == "") {
          $attributes["id"] = $post["batch_kode"];
          $table->insert($attributes);
        } else {
          $where = "id = '" . $post["gen_id"] . "'";
          $table->update($attributes, $where);
        }
        App::flash('info', 'Data Tersimpan.');
        App::redirect('batch.index');
      }
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('batch.a001');
  }

  public function v005($id = null) {

    $grid['folder'] = "Stock";
    $grid['title'] = "Form batch / Brand Item";
    $grid['url_submit'] = App::urlFor("batch.s003");
    $data = null;
    if(!is_null($id)){
      $data = Batch::find($id);
      $grid['is_read_only'] = true;
    }
    $grid['data'] = $data;

    $grid['url_price_list'] = APP::urlFor('pricelist.dataset');
    $grid['url_item'] = APP::urlFor('item.dataset');
    App::render('batch/form_batch', $grid);
  }

  public function d011($id = null){
    if(!is_null($id)) {
      $result = Batch::find($id);
      $result->delete();
      ZiUtil::to_json(json_encode("{ success: true}"));
      return;
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('batch.index');
  }
}
