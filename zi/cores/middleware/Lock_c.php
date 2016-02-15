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
namespace Zi;
/**
*
*/
class Lock_c
{
	public function __construct()
	{
		$this->app = \App::getInstance();
       // for control auth author user
		$this->auth = \Strong\Strong::getInstance();

		if ($this->auth->loggedIn()) {
			$this->user = $this->auth->getUser();
		}
		$this->template_header = "<div>
		<div>DEPO FARMASI RUMAH SAKIT MATA MASYARAKAT</div>
		<div>JAWA TIMUR</div>
		<div>JL. GAYUNG KEBONSARI TIMUR 49</div>
		<div>SURABAYA</div>
		</div>";
	}
}
