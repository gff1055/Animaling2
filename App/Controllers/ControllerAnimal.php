<?php
namespace App\Controllers;

use App\Models\ModelAnimal;
use App\Models\ModelStatus;
use App\Views\Cabecalho;
use App\Init;

class ControllerAnimal{
	
	
	public function index($nick){
		
		$cab = new Cabecalho($nick);

		$modelAnimal = new ModelAnimal(Init::getDB());
		$modelStatus = new ModelStatus(Init::getDB());
		
		$dadosAnimal = $modelAnimal->exibirDadosAnimal($nick);
		$posts = $modelStatus->exibirTodosStatus($nick);
		$titulo = "";
		
		if($dadosAnimal==ModelAnimal::NO_RESULTS){
			$cab->abertura("Pagina não encontrada");
			include_once "../App/Views/formBusca.php";
			include_once "../App/Views/paginaNaoExiste.php";
		}
		else{
			$cab->abertura("$nick - Página Inicial");
			include_once "../App/Views/formBusca.php";
			include_once "../App/Views/animalIndex.php";
		}
		$cab->fechamento();
	}

	public function perfil(){

	}
	
	public function newpost($pNick){
		
		//$modelPost = new ModelStatus(In);
		echo "ola".$pNick;
	}
	
	public function atualizarStatus(){

	}
	
	public function seguidores(){

	}
	
	public function seguidos(){

	}
}


?>