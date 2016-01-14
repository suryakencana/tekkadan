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

class Route extends ZiFacade
{
	public static function getFacadeAccessor() { return 'router'; }

    public static function map()
    {
    	return call_user_func_array(array(self::$slim, 'map'), func_get_args());
    }

    public static function get()
    {
    	return call_user_func_array(array(self::$slim, 'get'), func_get_args());
    }

    public static function post()
    {
    	return call_user_func_array(array(self::$slim, 'post'), func_get_args());
    }

    public static function put()
    {
    	return call_user_func_array(array(self::$slim, 'put'), func_get_args());
    }

    public static function patch()
    {
    	return call_user_func_array(array(self::$slim, 'patch'), func_get_args());
    }

    public static function delete()
    {
    	return call_user_func_array(array(self::$slim, 'delete'), func_get_args());
    }

    public static function options()
    {
    	return call_user_func_array(array(self::$slim, 'options'), func_get_args());
    }

    public static function group()
    {
    	return call_user_func_array(array(self::$slim, 'group'), func_get_args());
    }

    public static function any()
    {
    	return call_user_func_array(array(self::$slim, 'any'), func_get_args());
    }

    public static function controller()
    {
        return call_user_func_array(array(self::$slim, 'controller'), func_get_args());
    }

}
