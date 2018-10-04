<?php
class Dao {
  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_470e46bcfd224d6";
  private $user = "b6654bc7a1a313";
  private $pass = "bf0523a8";

  public function getConnection () {
    return new PDO("mysql:host={$this->host};dbname={$this->db}"}
  }
?>
