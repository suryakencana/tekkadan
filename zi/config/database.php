<?php
/*
 * Copyright (C) 2013 surya || nanang.ask@gmail.com
 *
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
 */

/**
 * @return array() database config
 * User: surya
 * Date: 8/29/13
 * Time: 10:14 AM
 */
/*'oci' => 'oci://username:passsword@localhost/xe'*/
/*
'development' =>
        array(
            'driver' => 'oci',
            'host' => '192.168.56.101',
            'port' => '1527',
            'database' => 'xe',
            'username' => 'uas',
            'password' => 'si_uas',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => 'zi'
        ),'sqlite' => 'sqlite://my_database.db',
*/
return array(
    'development' =>
        array(
            'driver' => 'pgsql',
            'host' => 'localhost',
            'port' => '5432',
            'database' => 'tekkadan',
            'username' => 'surya',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ),
    'production'=>
            array(
            'driver' => 'pgsql',
            'host' => 'localhost',
            'port' => '5432',
            'database' => 'tekkadan',
            'username' => 'surya',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        )
);
