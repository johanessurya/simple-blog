<?php
class Config {
  // Database configuration
  public static $database = array(
    'username' => 'root',
    'password' => '',
    'host' => 'localhost',
    'name' => 'blog' // Database name
  );

  // Database connection using MySQLi
  public static $DB;
}

// Make a connection and store to Config::$DB
Config::$DB = new mysqli(Config::$database['host'], Config::$database['username'], Config::$database['password'], Config::$database['name']);
?>
