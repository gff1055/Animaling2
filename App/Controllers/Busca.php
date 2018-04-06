<?php

namespace App\Controllers;

use App\Models\ModelDono;
use App\Models\ModelAnimal;
use App\Views\Cabecalho;
use App\Init;

class Busca{

	public $cab;
	function __construct(){
		$this->cab = new Cabecalho();
	}

	public function index(){

		$this->cab->abertura("Busca");
		
		include_once "../App/Views/formCaixaBusca.php";
		include_once "../App/Views/buscaIndex.php";
		
		if(!empty($_POST["termoBusca"])){
			$termo = $_POST["termoBusca"];
			$existe = 0;
		
			$modelDono = new ModelDono(Init::getDB());
			$ocorrenciasDono = $modelDono->buscarPrimeirosDonos($termo);
			if($ocorrenciasDono){
				include_once "../App/Views/buscarDono.php";
				$existe+=1;
			}
		
			$modelAnimal = new ModelAnimal(Init::getDB());
			$ocorrenciasAnimal = $modelAnimal->buscarPrimeirosAnimais($termo);
			if($ocorrenciasAnimal){
				include_once "../App/Views/buscarAnimal.php";
				$existe+=1;
			}

			if(!$existe)
				include_once "../App/Views/buscaSemResultados.php";
		}

		$this->cab->fechamento();
	}

	public function donos(){
		$this->cab->abertura("Busca por donos");
		include_once "../App/Views/formCaixaBusca.php";
		if(!empty($_POST["termoBusca"])){
			$termo = $_POST["termoBusca"];
			$modelDono = new ModelDono(Init::getDB());
			$ocorrenciasDono = $modelDono->buscarTodosDonos($termo);
			include_once "../App/Views/buscarDono.php";
		}
		$this->cab->fechamento();
	}

	public function animais(){
		$this->cab->abertura("Busca por animais");
		include_once "../App/Views/formCaixaBusca.php";
		if(!empty($_POST["termoBusca"])){
			$termo = $_POST["termoBusca"];
			$modelAnimal = new ModelAnimal(Init::getDB());
			$ocorrenciasAnimal = $modelAnimal->buscarTodosAnimais($termo);
			include_once "../App/Views/buscarAnimal.php";
		}
		$this->cab->fechamento();
	}

	public function status(){
		echo "Eu sou a busca por status";
	}


}

?>