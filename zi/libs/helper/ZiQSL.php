<?php
/**
 * Copyright (c) 11 2015 | surya
 * 01/11/15 nanang.ask@kubuskotak.com
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
 *  ZiQSL.php
 */


class ZiQSL {

  /**
   * @var array[\ZiSQL]
   */
  protected static $zsql = array();

  /**
   * @var string
   */
  protected $_conn;

  /**
   * @var string
   */
  protected $_table;

  function __construct($conn)
  {
    $this->_conn = $conn;
    // Make default if first instance
    if (is_null(static::getInstance())) {
      $this->_setInstance('default');
    }
  }

  private function _setInstance($name)
  {
    static::$zsql[$name] = $this;
  }

  /**
   * Get application instance by name
   * @param  string    $name The name of the zisql instance
   * @return ZiSQL
   */
  public static function getInstance($name = 'default')
  {
    return isset(static::$zsql[$name]) ? static::$zsql[$name] : null;
  }

  public function insert($hash, $table)
  {
    try {
      $table = $table instanceof \ActiveRecord\Model ? $table::table_name() : $table;
      $sql_build = new ActiveRecord\SQLBuilder($this->_conn, $table);
      $sql_build->insert($hash);
      $values = array_values($hash);
      $this->_conn->query($sql_build->to_s(), $values);
    }catch(PDOException  $e ){
      echo "Error: ".$e;
    }
  }
}