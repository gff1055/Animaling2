<?php

namespace App\Controllers;

use App\Models\ModelDono;
use App\Init;

class Busca{

	public function donos(){
		$modelDono = new ModelDono(Init::getDB());
		echo Init::getDB();
		$ocorrencias = $modelDono->buscarUsuario();
		include_once "../App/Views/buscarusuario.php";
		
	}

	public function animais(){
		echo "Eu sou a busca por animais";
	}

	public function status(){
		echo "Eu sou a busca por status";
	}


}

?>