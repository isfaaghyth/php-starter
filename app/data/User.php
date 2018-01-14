<?php
   include_once '../database/BaseDB.php';

   public class User extends BaseDB {

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

   }

?>
