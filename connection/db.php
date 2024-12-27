<?php

// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $connection = new PDO("mysql:host=$servername;dbname=my_database", $username, $password);
//   // set the PDO error mode to exception
//   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

class Connection{
 private $servername = "localhost";
 private $username = "root";
 private $password = "";


public function connect(){
   try {
      $connection = new PDO("mysql:host=$this->servername;dbname=my_database", $this->username, $this->password);
      // set the PDO error mode to exception
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $connection;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  // return new PDO("mysql:host=$this->servername;dbname=my_database", $this->username, $this->password);

  // echo'<script>alert("jdfshuvidh")</script>';

}



}


$con = new Connection();
$con->connect();

?>