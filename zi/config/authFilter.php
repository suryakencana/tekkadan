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
 * Date: 2/17/14
 * Time: 1:30 PM
 */

/**
 * Digunakan untuk filter url + uri security login (auth)
 *
 * @return array
 */

return array(
  // array('path' => '/([a-z][-a-z0-9]).+'),
  // array('path' => '/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
  array('path' => '/'),
  array('path' => '/api/1.0'),
  array('path' => '/api/1.0/([a-z][-a-z0-9]).+'),
  array('path' => '/api/1.0/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
  array('path' => '/item'),
  array('path' => '/item/([a-z][-a-z0-9]).+'),
  array('path' => '/item/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
  array('path' => '/stok'),
  array('path' => '/stok/([a-z][-a-z0-9]).+'),
  array('path' => '/batch'),
  array('path' => '/batch/([a-z][-a-z0-9]).+'),
  array('path' => '/batch/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
  array('path' => '/uom'),
  array('path' => '/uom/([a-z][-a-z0-9]).+'),
  array('path' => '/uom/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
  array('path' => '/principal'),
  array('path' => '/principal/([a-z][-a-z0-9]).+'),
  array('path' => '/principal/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
  array('path' => '/pricelist'),
  array('path' => '/pricelist/([a-z][-a-z0-9]).+'),
  array('path' => '/pricelist/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
  array('path' => '/price'),
  array('path' => '/price/([a-z][-a-z0-9]).+'),
  array('path' => '/price/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
  array('path' => '/pos'),
  array('path' => '/pos/([a-z][-a-z0-9]).+'),
  array('path' => '/pos/([a-z][-a-z0-9]).+[/]?([a-z][-a-z0-9]).+'),
);