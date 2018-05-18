<?php
namespace App\Controllers;

use App\Models\ModelAnimal;
use App\Models\ModelStatus;
use App\Models\Status;
use App\Views\Cabecalho;
use App\Init;

class ControllerAnimal{
	
	
	public function index($nick){
		
		$cab = new Cabecalho($nick);

		$modelAnimal = new ModelAnimal(Init::getDB());
		$dadosAnimal = $modelAnimal->exibirDadosAnimal($nick);
		
		$modelStatus = new ModelStatus(Init::getDB());
		$posts = $modelStatus->exibirTodosStatus($nick);
		if(!empty('novoPost')){
			$status->new Status();
			$status->setCodigoAnimal($_POST['codigoAnimal']);
			$status->setConteudo($_POST['conteudo']);
			$statud->setDataStatus(Status::NOVO_STATUS);	
		}
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

		//$modelAnimal = new ModelAnimal(Init::getDB());
		//echo $modelAnimal->getCodFromNick($pNick);

		$status = new Status();
		$modelStatus = new ModelStatus(Init::getDB());

		$status->setCodigoAnimal($_POST['codAn']);
		$status->setConteudo($_POST['novPost']);
		$status->setDataStatus(Status::NOVO_STATUS);
			
		$modelStatus->inserirStatus($status);
		
		
		//$modelPost = new ModelStatus(In);
		//echo "ola".$pNick;
	}
	
	public function atualizarStatus(){

	}
	
	public function seguidores(){

	}
	
	public function seguidos(){

	}
}


?>