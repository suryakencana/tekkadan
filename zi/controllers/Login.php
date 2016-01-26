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
 * Date: 4/25/14
 * Time: 22:11 PM
 */

class Login_Controller extends \Zi\Lock_c
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$req = App::request();
		if($req->isPost()){
			if ($this->auth->login($req->post('user'), $req->post('passwd'))) {
				App::flash('info',"Your login was successful")->redirect('home');
			} else {
				App::flash('error', 'Your username or password was wrong');
			}
		}
		App::render('auth/login');
	}

	public function getOut()
	{
		$this->auth->logout(true);
		// App::flash('info',"Come back later")->redirect('home');
		header("location:http://" . $_SERVER['HTTP_HOST']);
	}
}