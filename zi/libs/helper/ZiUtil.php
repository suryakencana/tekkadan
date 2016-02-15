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
		if(isset($params['aktif'])) {
			//$params['aktif'] = TRUE or False;
			$aktif = $params['aktif'];
			$condition['conditions'] = $condition['conditions']." AND aktif = $aktif";
		}
		if(!empty($params['a']) && !empty($params['z']) && !empty($params['cdate'])) {
			$col_date = $params['cdate'];
			$dquery = sprintf(" AND %s BETWEEN '%s' and '%s' ", $params['cdate'], $params['a'], $params['z']);
			$query .= $dquery;
			$condition['conditions'] = $condition['conditions'].$dquery;
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
		$date = date("dmY");
		return($date);
	}

	public static function generate($filename, $data, $fileDetail)
	{
		$objPHPExcel = PHPExcel_IOFactory::load($fileDetail->template);
		$objPHPExcel->getProperties()->setCreator($fileDetail->creator);
		$objPHPExcel->getProperties()->setLastModifiedBy($fileDetail->creator);
		$objPHPExcel->getProperties()->setTitle($fileDetail->title);
		$objPHPExcel->getProperties()->setSubject($fileDetail->subject);
		$objPHPExcel->getProperties()->setDescription($fileDetail->desc);

		$objPHPExcel->setActiveSheetIndex(0);
		foreach ($data as $key => $value) {
			if ($key == 'bold') {
				foreach ($value as $val) {
					$objPHPExcel->getActiveSheet()->getStyle($val)->getFont()->setBold(true);
				}
				$setcell = false;
			} else if (strpos($key,':')) {
				$objPHPExcel->getActiveSheet()->mergeCells($key);
				$cell = substr($key, 0, strpos($key,':'));
				$setcell = true;
				$cells = $key;
			} else {
				$setcell = true;
				$cell = $key;
				$cells = $key;
			}

			if ($setcell) {
				$objPHPExcel->getActiveSheet()->SetCellValue($cell, $value['value']);
				switch ($value['align']) {
					case 'center':
					$objPHPExcel->getActiveSheet()->getStyle($cell)->getAlignment()->applyFromArray(
					array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,));
					break;
					case 'right':
					$objPHPExcel->getActiveSheet()->getStyle($cell)->getAlignment()->applyFromArray(
					array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,));
					break;
					default:
					break;
				}

				switch ($value['border']) {
					case 'all':
					$objPHPExcel->getActiveSheet()->getStyle($cells)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
					break;
					case 'top':
					$objPHPExcel->getActiveSheet()->getStyle($cells)->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
					break;
					case 'left':
					$objPHPExcel->getActiveSheet()->getStyle($cells)->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
					break;
					case 'right':
					$objPHPExcel->getActiveSheet()->getStyle($cells)->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
					break;
					case 'bottom':
					$objPHPExcel->getActiveSheet()->getStyle($cells)->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
					break;
					default:
					break;
				}

				if (array_key_exists('cur_format', $value)) {
					if ($value['cur_format']) {
						//$objPHPExcel->getActiveSheet()->getStyle($cells)->getNumberFormat()->setFormatCode('_([$Rp-421]* #.##0_)');
						//$objPHPExcel->getActiveSheet()->getStyle($cells)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD);
						$objPHPExcel->getActiveSheet()->getStyle($cells)->getNumberFormat()->setFormatCode('[$Rp-421]* #,##0_-');
					}
				}
			}

		}
		$objPHPExcel->getActiveSheet()->setTitle($fileDetail->sheetTitle);

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="'.$fileDetail->filename.'"');
		$objWriter->save('php://output');exit;
	}

	public static function defaultFileDetail()
	{
		$arr = Array("template"=>"assets/temp/idk.xlsx",
		"creator"=>"Kubuskotak | Tumbuk Segara Abadi",
		"lastModified" => "Kubuskotak | Tumbuk Segara Abadi",
		"title" => "Data Laporan",
		"subject" => "Data Laporan",
		"desc" => "Data Laporan",
		"sheetTitle" => "Laporan",
		"filename" => "laporan.xlsx");
		return (object)$arr;
	}
}
