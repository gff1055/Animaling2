<?php
namespace App\Controllers;

use App\Models\ModelAnimal;
use App\Init;

class ControllerAnimal{
	public function index($nick){
		$model = new ModelAnimal(Init::getDB());
		$info = $model->exibirDadosAnimal($nick);
		echo "<br>".$info['descricao']."<br>";
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