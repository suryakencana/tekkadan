<?php
/**
* Copyright (c) 11 2015 | surya
* 11/11/15 nanang.ask@kubuskotak.com
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
*  UnitOM.php
*/

class UnitOM_Controller extends \Zi\Lock_c
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Unit Of Measure";


    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "label": "Nama", "name": "uom_nama", "key": true}');
    $cols[] = json_decode('{ "label": "Aktif", "name": "aktif"}');


    $grid["url_add"] = App::urlFor("unitOM.a001");
    $grid["url_edit"] = App::urlFor("unitOM.v005");
    $grid["url_remove"] = App::urlFor("unitOM.d011");
    $grid["source_url"] = App::urlFor("unitOM.dataset");
    $grid["method"] = "GET";
    $grid["cols"] = json_encode($cols);

    APP::render('component/jqgrid_view', $grid);
  }

  public function dataset()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $params);
    $query = "uom_nama ILIKE '%".$search."%'";
    $results = ZiUtil::search_result_jq_DB($query, $params, 'UOM');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function a001()
  {
    $grid['folder'] = "Stock";
    $grid['title'] = "Form Unit of Measure / Satuan Item";
    $grid['url_submit'] = App::urlFor("unitOM.s003");
    App::render('uom/form_uom',$grid);
  }

  /**
  * POST /uom
  *
  */
  public function s003()
  {
    $error;
    try {
      $req = App::request();
      if($req->isPost()){
        $post = $req->post();
        $attributes = array(
          "uom_nama" => $post["uom_nama"],
          "aktif" => isset($post["aktif"]) ? 1 : 0
        );
        $table = UOM::table();

        if(is_null($post["gen_id"]) || $post["gen_id"] == "") {
          $table->insert($attributes);
        } else {
          $where = "uom_nama = '".$post["gen_id"]."'";
          $table->update($attributes, $where);
        }
      }

    } catch (Exception $e) {
      $error = $e->getMessage();

      ZiUtil::unique_error($error);
      App::flash('error', $post["uom_nama"].' '.ZiUtil::unique_error($error));
      App::redirect('unitOM.a001');
    }
    App::flash('info', 'Data Tersimpan : '.$post["uom_nama"]);
    App::redirect('unitOM.index');
  }

  public function v005($id = null) {

    $grid['folder'] = "Stock";
    $grid['title'] = "Form Unit of Measure / Satuan Item";
    $data = null;
    if(!is_null($id)){
      $data = UOM::find($id);
    }
    $grid['data'] = $data;
    $grid['url_submit'] = App::urlFor("unitOM.s003");
    App::render('uom/form_uom',$grid);
  }

  public function d011($id = null){
    $result = UOM::find($id);
    $result->delete();
    ZiUtil::to_json(json_encode("{ success: true}"));
  }
}
