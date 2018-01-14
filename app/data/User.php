<?php
   require_once '../app/database/BaseDB.php';

   class User extends BaseDB {

      public function __construct(){
         parent::__construct("users"); //table name
      }

      //override from BaseDB
      function insert() {
         return "INSERT INTO $this->tableName (name,email,password) VALUES(?,?,?)";
      }

      //override from BaseDB
      function update($id) {
         return "UPDATE $this->tableName SET name=?,email=?,password=? WHERE id=$id";
      }

      public function getByEmail($email) {
         $sql = "SELECT * FROM $this->tableName WHERE email='$email'";
         $con = $this->conn->prepare($sql);
         $con->execute();
         return $con->fetchAll();
      }

   }

?>
