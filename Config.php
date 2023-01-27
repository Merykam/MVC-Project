<?php

class Connection{

    // Create connection
    public function conn(){
          try {
              $conn = new PDO("mysql:host=localhost;dbname=mvc-project",'root',"");
              
              return $conn;
           
  
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            }
  }
  
  
  }
$checkConn = new connection();
$checkConn -> conn();