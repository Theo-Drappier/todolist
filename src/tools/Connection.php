<?php

namespace Todo\tools;

use PDO;

class Connection {
  //Attributes
  private const DBNAME = 'web_todo_v0';
  private const LOGIN = 'lpdip';
  private const PASSWORD = 'lpdip:17';
  private const HOST = '127.0.0.1';
  private $_db;
  private static $_instance;

  //Constructor
  private function __construct() {
    $this->_db = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME,
                          self::LOGIN, self::PASSWORD);
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
    var_dump($request);
    return $request;
  }
}
