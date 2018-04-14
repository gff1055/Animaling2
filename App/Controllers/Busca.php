<?php

namespace App\Controllers;

use App\Models\ModelDono;
use App\Models\ModelAnimal;
use App\Models\ModelStatus;
use App\Init;

class Busca{

	public function pagina(){
		include_once "../App/Views/pagina.php";
	}

	public function index(){

		//$cab = new Cabecalho();

		
		//include_once "../App/Views/formCaixaBusca.php";
		//include_once "../App/Views/buscaIndex.php";
		$termo = $_POST["pesquisa"];
		$tipo = $_POST["tipoPesquisa"];
		
		//$flagNada = 0;
		if($tipo=="Tudo"){

			$modelDono = new ModelDono(Init::getDB());
			$ocorrenciasDono = $modelDono->buscarPrincipaisDonoS($termo);
			

			$modelAnimal = new ModelAnimal(Init::getDB());
			$ocorrenciasAnimal = $modelAnimal->buscarPrincipaisAnimais($termo);

			$modelPost = new ModelStatus(Init::getDB());
			$ocorrenciasPost = $modelPost->buscarPrincipaisStatus($termo);

			include_once "../App/Views/buscaGeral.php";
		}

		elseif($tipo=="Donos"){
			$modelDono = new ModelDono(Init::getDB());
			$ocorrenciasDono = $modelDono->buscarTodosDonos($termo);
			include_once "../App/Views/buscarDono.php";
		}

		elseif($tipo=="Animais"){
			$modelAnimal = new ModelAnimal(Init::getDB());
			$ocorrenciasAnimal = $modelAnimal->buscarTodosAnimais($termo);
			include_once "../App/Views/buscarAnimal.php";
		}

		elseif($tipo=="Posts"){
			$modelPosts = new ModelStatus(Init::getDB());
			$ocorrenciasPosts = $modelPosts->buscarTodosStatus($termo);
			include_once "../App/Views/buscarPosts.php";	
		}

		else echo "OPA...";


		/*else $flagNada+=1;
		
		$modelAnimal = new ModelAnimal(Init::getDB());
		$ocorrenciasAnimal = $modelAnimal->buscarPrimeirosAnimais($termo);
		if($ocorrenciasAnimal)
			include_once "../App/Views/buscarAnimal.php";
		else $flagNada+=1;

		if($flagNada == 2)
			include_once "../App/Views/buscaSemResultados.php";*/



	}

	public function all(){
		$termo = $_POST["pesquisa"];
		$modelDono = new ModelDono(Init::getDB());
		$ocorrencias = $modelDono->buscarTodosDonos($termo);
		//include_once "../App/Views/buscarStatus.php";
		include_once "../App/Views/buscarDono.php";
	}

	public function donos(){
		$termo = $_POST["pesquisa"];
		$modelDono = new ModelDono(Init::getDB());
		$ocorrenciasDono = $modelDono->buscarTodosDonos($termo);
		include_once "../App/Views/buscarDono.php";
		
	}

	public function animais(){
		$termo = $_POST["pesquisa"];
		echo $termo;
		$modelAnimal = new ModelAnimal(Init::getDB());
		$ocorrenciasAnimal = $modelAnimal->buscarAnimal($termo);
		include_once "../App/Views/formCaixaBusca.php";
		include_once "../App/Views/buscarAnimal.php";
	}

	public function status(){
		
	}


}

?>