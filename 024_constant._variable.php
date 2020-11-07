<?php

class Database {
  private const DB_HOST = 'locahost';
  private const DB_USERNAME = 'root';
  private const DB_PASSWORD = '';
  private const DB_NAME = 'first_api';
  private $conn;
  public function __construct() {
    try {
      $this->conn = new PDO('mysql:hostname='.self::DB_HOST.';dbname='.self::DB_NAME, self::DB_USERNAME, self::DB_PASSWORD);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo 'Success';
    }catch(Exception $e) {
      echo $e->getMessage();
    }
  }
}
new Database;