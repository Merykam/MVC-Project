<?php


include "../Config.php";


class Crudjocks extends Connection{
    private $name;

    
    public function __construct($name)
    {

        $this -> name = $name;
        

        
    }
    public function inserData(){
        $req = $this->conn()->prepare("INSERT INTO `jocks` (`Text`) values (?)");
        // var_dump($req);
        // die();
        $req->execute([$this -> name]);
          

        

    }


}






?>

