<?php
/**
 * Copyright (c) 11 2015 | surya
 * 10/11/15 nanang.ask@kubuskotak.com
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
 *  Warehouse.php
 */


class Warehouse_Controller extends \Zi\Lock_c
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Gudang / Warehouse";

    $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "title": "ID", "field": "id", "visible": false}');
    $cols[] = json_decode('{ "title": "Nama", "field": "warehouse_nama"}');
    $cols[] = json_decode('{ "title": "Company", "field": "company", "visible": false}');
    $cols[] = json_decode('{ "title": "Keterangan", "field": "keterangan"}');

    $grid["url_add"] = App::urlFor("warehouse.a001");
    $grid["url_edit"] = App::urlFor("warehouse.v005");
    $grid["url_remove"] = App::urlFor("warehouse.d011");
    $grid["source_url"] = App::urlFor("warehouse.dataset");
    $grid["method"] = "GET";
    $grid["cols"] = json_encode($cols);

    APP::render('warehouse/grid_warehouse', $grid);
  }

  public function dataset()
  {
    $req = APP::request();
    if ($req->isPost()) {
      $params = $req->post();
      $query = "id = '" . $params['search'] . "'";
    } else {
      $params = $req->get();
      $query = "warehouse_nama ILIKE '%".$params['search']."%'";
    }
    $results = ZiUtil::search_result_DB($query, $params, Warehouse);
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function a001()
  {
    $grid['folder'] = "Stock";
    $grid['title'] = "Form Warehouse";
    $grid['url_submit'] = App::urlFor("warehouse.s003");
    App::render('warehouse/form_warehouse',$grid);
  }

  /**
   * POST /warehouse
   *
   */
  public function s003()
  {
    $req = App::request();
    if($req->isPost()){
      $post = $req->post();
      $attributes = array(
        "warehouse_nama" => $post["warehouse_nama"],
        "keterangan" => $post["keterangan"],
        "company" => "RSMM"
      );
      $table = Warehouse::table();

      if(is_null($post["gen_id"]) || $post["gen_id"] == "") {
        $attributes["id"] = ZiUtil::GetNowID();
        $table->insert($attributes);
      } else {
        $where = "id = '".$post["gen_id"]."'";
        $table->update($attributes, $where);
      }
    }
    App::redirect('warehouse.index');
  }

  public function v005($id = null) {

    $grid['folder'] = "Stock";
    $grid['title'] = "Form Warehouse";
    $data = null;
    if(!is_null($id)){
      $data = Warehouse::find($id);
    }
    $grid['data'] = $data;
    $grid['url_submit'] = App::urlFor("warehouse.s003");
    App::render('warehouse/form_warehouse',$grid);
  }

  public function d011($id = null){
    $ruang = Warehouse::find($id);
    $ruang->delete();
    ZiUtil::to_json(json_encode("{ success: true}"));
  }
}