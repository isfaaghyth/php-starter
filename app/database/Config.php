<?php
   class Config {
      const HOST     = 'localhost';
      const USER     = 'root';
      const PASS     = '';
      const DBNAME   = 'development';
      const EXCEPTION = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ];
      private $connection = null;

      public function __construct() {
          $dsn = "mysql:host=".self::HOST.";dbname=".self::DBNAME;

          try{
             $this->connection = new PDO($dsn,
                  self::USER,
                  self::PASS,
                  self::EXCEPTION);
          }catch(PDOException $e){
             echo $e->getMessage();
          }
      }

      public function getConnection() {
          return $this->connection;
      }
   }
?>
