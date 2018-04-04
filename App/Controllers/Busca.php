<?php

namespace App\Controllers;

use App\Models\ModelDono;
use App\Models\ModelAnimal;
use App\Init;

class Busca{

	public function index(){
		include_once "../App/Views/buscaIndex.php";
	}

	public function donos(){
		$termo = $_POST["termoBusca"];
		$modelDono = new ModelDono(Init::getDB());
		$ocorrenciasDono = $modelDono->buscarUsuario($termo);
		include_once "../App/Views/buscarUsuario.php";
		
	}

	public function animais(){
		$termo = $_POST["termoBusca"];
		echo $termo;
		$modelAnimal = new ModelAnimal(Init::getDB());
		$ocorrenciasAnimal = $modelAnimal->buscarAnimal($termo);
		include_once "../App/Views/buscarAnimal.php";
	}

	public function status(){
		echo "Eu sou a busca por status";
	}


}

?>