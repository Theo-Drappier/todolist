<?php

class Connection {
  //Attributes
  const DBNAME = 'web_todo_v0';
  const LOGIN = 'root';
  const PASSWORD = 'lpdip:17';
  const HOST = '127.0.0.1';
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
    $this->_db->exec($request);
  }
}

?>
