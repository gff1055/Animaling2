<?php

namespace App;

class Init{

	private $rotas;
	private $con;
	public static $urlRoot='/animaling2/public';

	function __construct(){
		$this->inicializarRotas();
		$urlAcessada=$this->urlDigit();
		$this->run($urlAcessada);
	}

	public function inicializarRotas(){
		
		$arrayRotasAux['buscaIndex'] = array(
			'route'=>Init::$urlRoot.'/busca',
			'controller'=>'busca',
			'action'=>'index'
		);

		$arrayRotasAux['buscaAnimais'] = array(
			'route'=>Init::$urlRoot.'/busca/animal',
			'controller'=>'busca',
			'action'=>'animais'
		);
		$arrayRotasAux['buscaDono'] = array(
			'route'=>Init::$urlRoot.'/busca/dono',
			'controller'=>'busca',
			'action'=>'donos'
		);
		$arrayRotasAux['buscaStatus'] = array(
			'route'=>Init::$urlRoot.'/busca/status',
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


	public static function getDB(){
		try{
			//conexao com o banco de dados
			$con = new \PDO("mysql:host=localhost; dbname=bdanimalnet;charset=utf8","root","");
		}catch(PDOException $e){
			echo "erro".$e->getMessage();
		}
		return $con;
	}
}


?>