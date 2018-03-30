<?php

namespace App\Controllers;

use App\Models\ModelDono;
use App\Init;

class Busca{

	public function index(){
		include_once "../App/Views/buscaIndex.php";
	}

	public function donos(){
		$termo = $_POST["termoBusca"];
		$modelDono = new ModelDono(Init::getDB());
		echo $termo;
		$ocorrencias = $modelDono->buscarUsuario($termo);
		include_once "../App/Views/buscarusuario.php";
		
	}

	public function animais(){
		echo "Eu sou a busca por animais";
	}

	public function status(){
		echo "Eu sou a busca por status";
	}


}

?>