<?php
/*
 * Copyright (C) 2013 surya || nanang.ask@gmail.com
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
 * Date: 8/29/13
 * Time: 10:14 AM
 */

date_default_timezone_set('Asia/Jakarta');
//var_dump((int)in_array('Asia/Jakarta', timezone_identifiers_list()));
define('Zi_START', microtime(true));
define('ZI', __DIR__ . '/../');
define('ZICONFIG', ZI . '/config');
define('APPLICATION', 'Zi');
define('VERSION', '0.4.0');
// define('VALIDATION_LANG_PATH', ZI.'/lang/');
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
define('BASEURL', $config['base_url']);
define('ASSET', $config['base_url'] . 'assets/');
define('EXT', '.twig');



//include the DOMPDF config file (required)
// require 'vendor/dompdf/dompdf/autoload.inc.php';

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require 'vendor/autoload.php';

// // inhibit DOMPDF's auto-loader
// define('DOMPDF_ENABLE_AUTOLOAD', false);
