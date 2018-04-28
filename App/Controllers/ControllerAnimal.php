<?php
namespace App\Controllers;

use App\Models\ModelAnimal;
use App\Views\Cabecalho;
use App\Init;

class ControllerAnimal{
	public function index($nick){
		
		$cab = new Cabecalho($nick);
		$model = new ModelAnimal(Init::getDB());
		$info = $model->exibirDadosAnimal($nick);
		if($info==ModelAnimal::NO_RESULTS){
			$cab->abertura("Pagina não encontrada");
			echo "O perfil associado a essa URL foi excluida ou nao existe";
		}
		else{
			$cab->abertura("$nick - Página Inicial");
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