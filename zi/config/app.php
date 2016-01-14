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
 * @return array() mode application Slim Config
 * User: surya
 * Date: 8/29/13
 * Time: 10:14 AM
 */
return array(
    // Application
    'mode' => 'development',
    'auth.url' => 'login',
    // Debugging
    'debug' => true,
    // Logging
    'log.writer' => null,
    'log.level' => \Slim\Log::DEBUG,
    'log.enabled' => true,
    // View
    'templates.path' => 'zi/templates',
    'view' => '\Slim\View',
    // Cookies
    'cookies.lifetime' => '60 minutes',
    'cookies.path' => '/',
    'cookies.domain' => null,
    'cookies.secure' => false,
    'cookies.httponly' => false,
    // Encryption
    'cookies.secret_key' => 'CHANGE_ME',
    'cookies.cipher' => MCRYPT_RIJNDAEL_256,
    'cookies.cipher_mode' => MCRYPT_MODE_CBC,
    // HTTP
    'http.version' => '1.1'
    );