<?php

namespace App;

class Init{

	function __construct(){
		echo "Inicializando<br>";
	}

	public function urlDigit(){
		return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
	}

}


?>