<?php

namespace App\Controllers;

use App\Models\ModelDono;
use App\Models\ModelAnimal;
//use App\Views\Cabecalho;
use App\Init;

class Busca{

	public function index(){

		//$cab = new Cabecalho();

		$ocorrenciasDono = 0;

		//include_once "../App/Views/formCaixaBusca.php";
		//include_once "../App/Views/buscaIndex.php";
		if(!empty($_POST["pesquisa"])){
			$termo = $_POST["pesquisa"];
		
		//$flagNada = 0;
		
			$modelDono = new ModelDono(Init::getDB());
			$ocorrenciasDono = $modelDono->buscarPrimeirosDonos($termo);
			
		}
		include_once "../App/Views/buscaPrincipal.php";
		/*else $flagNada+=1;
		
		$modelAnimal = new ModelAnimal(Init::getDB());
		$ocorrenciasAnimal = $modelAnimal->buscarPrimeirosAnimais($termo);
		if($ocorrenciasAnimal)
			include_once "../App/Views/buscarAnimal.php";
		else $flagNada+=1;

		if($flagNada == 2)
			include_once "../App/Views/buscaSemResultados.php";*/



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