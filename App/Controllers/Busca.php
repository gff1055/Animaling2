<?php

namespace App\Controllers;

use App\Models\ModelDono;
use App\Models\ModelAnimal;
use App\Init;

class Busca{

	public function index(){
		include_once "../App/Views/formCaixaBusca.php";
		include_once "../App/Views/buscaIndex.php";
		$termo = $_POST["termoBusca"];
		$modelDono = new ModelDono(Init::getDB());
		$ocorrenciasDono = $modelDono->buscarDono($termo);
		if($ocorrenciasDono)
			include_once "../App/Views/buscarDono.php";
		
		$modelAnimal = new ModelAnimal(Init::getDB());

		$ocorrenciasAnimal = $modelAnimal->buscarAnimal($termo);
		if($ocorrenciasAnimal)
			include_once "../App/Views/buscarAnimal.php";

	}

	public function donos(){
		$termo = $_POST["termoBusca"];
		$modelDono = new ModelDono(Init::getDB());
		$ocorrenciasDono = $modelDono->buscarDono($termo);
		include_once "../App/Views/formCaixaBusca.php";
		include_once "../App/Views/buscarDono.php";
		
	}

	public function animais(){
		$termo = $_POST["termoBusca"];
		echo $termo;
		$modelAnimal = new ModelAnimal(Init::getDB());
		$ocorrenciasAnimal = $modelAnimal->buscarAnimal($termo);
		include_once "../App/Views/formCaixaBusca.php";
		include_once "../App/Views/buscarAnimal.php";
	}

	public function status(){
		echo "Eu sou a busca por status";
	}


}

?>