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
*  Principal.php
*/

class Principal_Controller extends Zi\Lock_c
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $grid["folder"] = "Stock";
    $grid["title"] = "Principal / Brand";


    // $cols[] = json_decode('{"field": "state", "checkbox": true}');
    $cols[] = json_decode('{ "label": "Nama", "name": "nama", "key": true}');
    $cols[] = json_decode('{ "label": "Aktif", "name": "aktif", "formatter": "checkbox"}');


    $grid["url_add"] = App::urlFor("principal.a001");
    $grid["url_edit"] = App::urlFor("principal.v005");
    $grid["url_remove"] = App::urlFor("principal.d011");
    $grid["source_url"] = App::urlFor("principal.dataset");
    $grid["method"] = "GET";
    $grid["cols"] = json_encode($cols);

    APP::render('component/jqgrid_view', $grid);
  }

  public function dataset()
  {
    $req = APP::request();
    $get = $req->get();
    $search = ZiUtil::is_set('search', $get);
    $query = "nama ILIKE '%".$search."%'";
    $results = ZiUtil::search_result_jq_DB($query, $get, 'Principal');
    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function a001()
  {
    $grid['folder'] = "Stock";
    $grid['title'] = "Form Principal / Brand Item";
    $grid['url_submit'] = App::urlFor("principal.s003");
    App::render('principal/form_principal',$grid);
  }

  /**
  * POST /principal
  *
  */
  public function s003()
  {
    $error;
    try {
      $req = App::request();
      if($req->isPost()){
        $post = $req->post();
        if(!empty($post["nama"])) {
          $attributes = array(
            "nama" => $post["nama"],
            "aktif" => isset($post["aktif"]) ? 1 : 0
          );
          $table = Principal::table();

          if (is_null($post["gen_id"]) || $post["gen_id"] == "") {
            $table->insert($attributes);
          } else {
            $where = "nama = '" . $post["gen_id"] . "'";
            $table->update($attributes, $where);
          }

        }
      }
    } catch (Exception $e) {
      $error = $e->getMessage();

      ZiUtil::unique_error($error);
      App::flash('error', $post["nama"].' '.ZiUtil::unique_error($error));
      // App::flash('error', 'Terjadi kesalahan pada inputan anda.');
      App::redirect('principal.a001');
    }

    App::flash('info', 'Data Tersimpan.');
    App::redirect('principal.index');
  }

  public function v005($id = null) {

    $grid['folder'] = "Stock";
    $grid['title'] = "Form Unit of Measure / Satuan Item";
    $data = null;
    if(!is_null($id)){
      $data = Principal::find($id);
    }
    $grid['data'] = $data;
    $grid['url_submit'] = App::urlFor("principal.s003");
    App::render('principal/form_principal',$grid);
  }

  public function d011($id = null){
    if(!is_null($id)) {
      $result = Principal::find($id);
      $result->delete();
      ZiUtil::to_json(json_encode("{ success: true}"));
      return;
    }
    App::flash('error', 'Terjadi kesalahan pada inputan anda.');
    App::redirect('principal.index');
  }
}
