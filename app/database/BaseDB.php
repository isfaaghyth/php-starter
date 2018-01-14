<?php
   require_once 'Config.php';

   abstract class BaseDB {

      protected $conn = null;
      protected $tableName;

      protected abstract function insert();
      protected abstract function update($id);

      public function __construct($tableName) {
         $database = new Config();
         $this->tableName = $tableName;
         $this->conn = $database->getConnection();
      }

      public function insertData($data) {
         $prepare = $this->conn->prepare($this->insert());
         $prepare->execute($data);
         return $prepare->rowCount();
      }

      public function updateById($id, $data) {
         $prepare = $this->conn->prepare($this->update($id));
         $prepare->execute($data);
         return $prepare->rowCount();
      }

      public function getAll() {
         $sql = "SELECT * FROM $this->tableName";
         $ps = $this->conn->prepare($sql);
         $ps->execute();
         return $ps->fetchAll();
      }

      public function getById($id) {
         $sql = "SELECT * FROM $this->tableName WHERE id=$id";
         $con = $this->conn->prepare($sql);
         $con->execute();
         return $con->fetchAll();
      }

      public function removeById($id) {
         $sql = "DELETE FROM $this->tableName WHERE id=$id";
         return $this->conn->exec($sql);
      }

   }
?>
