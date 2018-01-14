<?php
   require_once 'Config.php';

   abstract class Connection {

      protected $coon = null;
      protected $tableName;
      protected abstract function update($id, $data);
      protected abstract function insert($data);

      public function __construct($tableName) {
         $this->tableName = $tableName;
         $database = new Config();
         $this->coon = $database->getConnection();
      }

      public function insertData($data) {
         return $this->coon->query($this->insert( $data));
      }

      public function updateById($id, $data) {
         return $this->coon->query($this->update($id, $data));
      }

      public function getAll() {
         $sql = "SELECT * FROM " . $this->tableName;
         $ps = $this->coon->prepare($sql);
         $ps->execute();
         return $ps->fetchAll();
      }

      public function getById($id) {
         $sql = "SELECT * FROM " . $this->tableName . " WHERE id=" . $id;
         $con = $this->coon->prepare($sql);
         $con->execute();
         return $con->fetchAll();
      }

      public function removeById($id) {
         $sql = "DELETE FROM " . $this->tableName . " WHERE id=" . $id;
         return $this->coon->exec($sql);
      }

   }
?>
