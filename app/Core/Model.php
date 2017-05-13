<?php

namespace App\Core;

use MysqliDb;

class Model {

  public $db;
  public $table;

  public function __construct()
  {
    $this->db = new MysqliDb ('127.0.0.1', 'root', 'root', 'tiny');
    $this->table = strtolower((new \ReflectionClass($this))->getShortName());
  }

  public function set_data($data)
  {
    $id = $this->db->insert ($this->table, $data);
    return $id;
  }

  public function get_data()
  {
    return $this->db->get($this->table);
  }
}
