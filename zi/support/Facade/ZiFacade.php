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
 * Date: 2/a7/14
 * Time: 1:30 PM
 */

namespace Zi;

class ZiFacade extends Facade {
	protected static $slim;

	public static function getFacadeAccessor() {}
	
	public static function registerAliases($aliases = null)
	{
		if (!$aliases) {
			$aliases = array(
				'App'      => 'Zi\App',
				'Config'   => 'Zi\Config',
				'Input'    => 'Zi\Input',
				'Log'      => 'Zi\Log',
				'Request'  => 'Zi\Request',
				'Response' => 'Zi\Response',
				'Route'    => 'Zi\Route',
				'View'     => 'Zi\View'
				);
		}

		foreach ($aliases as $alias => $class) {
			class_alias($class, $alias);
		}
	}

	public static function setFacadeApplication($app)
	{
		parent::$app = $app->container;
		self::$app   = $app->container;

		self::$slim = $app;
	}
}