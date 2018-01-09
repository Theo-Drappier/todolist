<?php

namespace Todo\tools;

require '../app/config/config.php';
use PDO;

class Connection {
  //Attributes
  private $_db;
  private static $_instance;

  //Constructor
  private function __construct() {
    $this->_db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,
                          LOGIN, PASSWORD);
  }

  public static function getInstance() {
    if(empty(self::$_instance))
    {
      self::$_instance = new Connection();
    }
    return self::$_instance;
  }

  //Methods
  /* Execute the request parameter
   */
  public function request($request) {
    return $this->_db->query($request);
  }

  public function exec($request) {
    $this->_db->execute($request);
  }

  public function prepare($request, array $param) {
    $request = $this->_db->prepare($request);
    foreach($param as $p) {
      $request->bindParam($p[0], $p[1]);
    }
    return $request;
  }
}
