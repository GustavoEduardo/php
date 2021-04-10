<?php 

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dao", "root", "gfamv1995");

	}



    public function fetchAll($comando){

        $stmt = $this->conn->prepare($comando);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

}

 ?>