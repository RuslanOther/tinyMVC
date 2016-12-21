<?php

namespace App\Core;

use MysqliDb;

class Model {

  public $db;

  public function __construct()
  {
    $this->db = new MysqliDb ('127.0.0.1', 'root', 'root', 'tiny');
  }

	public function get_data()
	{
    //TODO
	}
}
