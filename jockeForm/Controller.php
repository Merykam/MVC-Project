<?php

include "../Model/jockForm.php";

if(isset($_POST["submit"])){


    $jock = $_POST["jock"];
  

    $newjock = new Crudjocks($jock);

    $newjock->inserData();

    header("location: ../Public/index.php");



}







?>