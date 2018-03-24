<?php

namespace App;

class Init{

	private $rotas;

	function __construct(){
		echo "Inicializando<br>";
	}

	public function configuraRotas(){
		
	}

	public function run(){

	}

	public function urlDigit(){
		return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
	}

	public function setRotas($pRotas){
		$this->rotas = $pRotas;
	}

}


?>