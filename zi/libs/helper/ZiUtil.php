<?php
/*
* Copyright (C) 2014 surya || nanang.ask@gmail.com
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
* Date: 5/07/14
* Time: 16:06 PM
*/

class ZiUtil
{
	public static function hashVerify($password,$login)
	{
		return crypt($password,'$5$rounds=5000'.$password.$login);
	}

	public static function search_result_DB($query, $params, $model)
	{
		$result = array();
		$limit = isset($params['limit']) ? $params['limit'] : 0;
		$offset = isset($params['offset']) ? $params['offset'] : 0 ;

		$condition = array('conditions' => $query, 'limit' => $limit, 'offset' => $offset);
		if(isset($params['sort']) && isset($params['order'])){
			$sort = $params['sort'];
			$order = $params['order'];
			$condition['order'] = "$sort $order";
		}
		if(isset($params['aktif'])){
			//$params['aktif'] = TRUE or False;
			$aktif = $params['aktif'];
			$condition['conditions'] = $condition['conditions']." AND aktif = $aktif";
		}

		$result['query'] = $model::all($condition);
		$result['total'] = $model::count(array('conditions' => $query));
		return $result;
	}

	public static function search_result_jq_DB($query, $params, $model)
	{
		$result = array();
		$limit = isset($params['rows']) ? (int)$params['rows'] : 0;
		$offset = isset($params['page']) ? ((int)$params['page']-1)*(int)$params['rows'] : 0 ;

		$condition = array('conditions' => $query, 'limit' => $limit, 'offset' => $offset);
		if(!empty($params['sidx']) && isset($params['sidx']) && isset($params['sord'])){
			$sort = $params['sidx'];
			$order = $params['sord'];
			$condition['order'] = "$sort $order";
		}
		if(isset($params['aktif'])){
			//$params['aktif'] = TRUE or False;
			$aktif = $params['aktif'];
			$condition['conditions'] = $condition['conditions']." AND aktif = $aktif";
		}

		$result['query'] = $model::all($condition);
		// untuk jqgrid total adalah jumlah record dibagi limit (jumlah halaman)
		$total = $model::count(array('conditions' => $query));
		$total = (int)$total / (int)$limit;
		$total = (int)$total > 0 ? (int) $total : 1;
		$result['total'] = $total;
		return $result;
	}

	public static function unique_error($error) {
		$pos = strpos($error, 'Unique violation');
		if ($pos !== false) {
			return 'Data sudah ada';
		}
		return $error;
	}

	public static function is_set($key, $obj)
	{
			return isset($obj[$key]) ? $obj[$key] : '';
	}

	public static function check_bool_int($var)
	{
		return isset($var) ? 1 : 0;
	}

	public static function check_int($var)
	{
		return is_numeric($var) ? $var: 0;
	}

	public static function dataset_json($query, $total)
	{
		$resp = APP::response();
		$resp->headers->set('Content-Type', 'application/json');
		$resp->setStatus(201);
		$dataset = array();
		$dataset["rows"] = array();
		foreach ($query as $row) {
			$dataset["rows"][] = json_decode($row->to_json());
		}

		$dataset["total"] = $total;
		$resp->setBody(json_encode($dataset));
	}

	public static function to_json($content)
	{
		$resp = APP::response();
		$resp->headers->set('Content-Type', 'application/json');
		$resp->headers->set('Cache-Control', 'no-cache');
		$resp->setStatus(200);

		$resp->setBody($content);
	}

	public static function GetTransID()
	{
		$r = rand();
		$u = uniqid(getmypid() . $r . (double)microtime()*1000000,true);
		$m = md5(session_id().$u);
		return($m);
	}

	public static function GetNowID()
	{
		$r = rand();
		$date = getdate();
		$u =  $date["year"]. $date["mon"]. $date["mday"].$r;
		return($u);
	}

	public static function GetDateNow()
	{
		$date = getdate();
		$u =  $date["mday"].$date["mon"].$date["year"];
		return($u);
	}
}
