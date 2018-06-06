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
		
		if(!empty($_POST['novoPost'])){
			$status = new Status();
			$status->setCodigoAnimal($dadosAnimal['codigo']);
			$status->setConteudo($_POST['novoPost']);
			$status->setDataStatus(Status::NOVO_STATUS);
			$modelStatus->inserirStatus($status);	
		}
		
		//EXIBINDO TODOS OS POSTS

		$posts = $modelStatus->exibirTodosStatus($nick);
		
		//se o animal possuir posts
		if($dadosAnimal==ModelAnimal::NO_RESULTS){
			$cab->abertura("Pagina não encontrada");
			include_once "../App/Views/formBusca.php";
			include_once "../App/Views/paginaNaoExiste.php";
		}

		//se o animal nao possui posts
		else{
			$cab->abertura("$nick - Página Inicial");
			include_once "../App/Views/formBusca.php";
			include_once "../App/Views/animalIndex.php";
		}
		$cab->fechamento();
	}

	public function verPost($codigo){

		$cab = new Cabecalho();

		$modelPost = new ModelStatus(Init::getDB());
		$post = $modelPost->exibirUmStatus($codigo);

		$cab->abertura($post['nomeAnimal']);
		include_once "../App/Views/exibePost.php";
		$cab->fechamento();
	}
	

	public function newpost($pNick){

		$status = new Status();
		$modelStatus = new ModelStatus(Init::getDB());

		$status->setCodigoAnimal($_POST['codAn']);
		$status->setConteudo($_POST['novPost']);
		$status->setDataStatus(Status::NOVO_STATUS);
			
		$modelStatus->inserirStatus($status);
	}

	public function deletarPost($pCodigo){
		$modelStatus = new ModelStatus(Init::getDB());
		$modelStatus->excluirStatus($pCodigo);
		echo "deletando post ".$pCodigo;
		include_once "../App/Views/excluiPost.php";		
	}
	
	public function atualizarStatus(){

	}
	
	public function seguidores(){

	}
	
	public function seguidos(){

	}
}


?>