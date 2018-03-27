<?php

namespace App;

class Init{

	private $rotas;

	function __construct(){
		$this->inicializarRotas();
		$urlAcessada=$this->urlDigit();
		$this->run($urlAcessada);
	}

	public function inicializarRotas(){
		$arrayRotasAux['buscaAnimais'] = array(
			'route'=>'/animaling2/public/busca/animal',
			'controller'=>'busca',
			'action'=>'animais'
		);
		$arrayRotasAux['buscaDono'] = array(
			'route'=>'/animaling2/public/busca/dono',
			'controller'=>'busca',
			'action'=>'donos'
		);
		$arrayRotasAux['buscaStatus'] = array(
			'route'=>'/animaling2/public/busca/status',
			'controller'=>'busca',
			'action'=>'status'
		);

		$this->configurarRotas($arrayRotasAux);

	}

	public function run($url){
		foreach($this->rotas as $rota){
			if($rota['route'] == $url){
				$classe = 'App\Controllers\\'.ucfirst($rota['controller']);
				$action = $rota['action'];
				$controller = new $classe;
				$controller->$action();
			}
		}
	}

	public function urlDigit(){
		return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
	}

	public function configurarRotas(array $pRotas){
		$this->rotas = $pRotas;
	}

}


?>