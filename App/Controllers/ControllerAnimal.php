<?php
namespace App\Controllers;

use App\Models\ModelAnimal;
use App\Views\Cabecalho;
use App\Init;

class ControllerAnimal{
	public function index($nick){
		
		$cab = new Cabecalho($nick);
		$model = new ModelAnimal(Init::getDB());
		$dadosAnimal = $model->exibirDadosAnimal($nick);
		if($dadosAnimal==ModelAnimal::NO_RESULTS){
			$cab->abertura("Pagina não encontrada");
			include_once "../App/Views/formBusca.php";
			echo "O perfil associado a essa URL foi excluida ou nao existe";
		}
		else{
			$cab->abertura("$nick - Página Inicial");
			include_once "../App/Views/formBusca.php";
			echo "<br>".$info['descricao']."<br>";
		}
		$cab->fechamento();
	}

	public function perfil(){

	}
	
	public function novoStatus(){

	}
	
	public function atualizarStatus(){

	}
	
	public function seguidores(){

	}
	
	public function seguidos(){

	}
}


?>