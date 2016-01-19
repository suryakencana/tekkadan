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

class Pasien_Controller extends \Zi\Lock_c
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {

  }

  public function dataset()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $get);
    $query = "cust_usr_nama ILIKE '%" .$search ."%' OR cust_usr_kode LIKE '%".$search."%'";
    $results = ZiUtil::search_result_DB($query, $params, 'Pasien');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  /**
  *
  * api untuk jenis pasien
  */

  public function jenispasien()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $get);
    $query = "jenis_nama ILIKE '%".$search."%'";
    $results = ZiUtil::search_result_DB($query, $params, 'JenisPasien');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

  public function reg_pasien()
  {
    $req = APP::request();
    $params = $req->get();
    $search = ZiUtil::is_set('search', $get);
    $query = "cust_usr_nama ILIKE '%" . $search ."%' OR cust_usr_kode LIKE '%".$search."%'";
    $results = ZiUtil::search_result_DB($query, $params, 'RegPasien');

    return ZiUtil::dataset_json($results['query'], $results['total']);
  }

 /* public function dataset()
  {
    $resp = APP::response();
    $resp->headers->set('Content-Type', 'application/json');
    $dataset = array();
    $result = VPasiens::all();
    foreach ($result as $row) {
      $dataset["rows"][] = json_decode($row->to_json());
    }
    $dataset["total"] = Pasien::count();
    echo json_encode($dataset);
  }*/

  /**
  * GET /Pasien/add
  *
  */
  public function a001(){

  }

  /**
  * POST /Pasien
  *
  */
  public function s003(){

  }

  public function v005($id = null){


  }

  public function d011($id = null){

  }
}
