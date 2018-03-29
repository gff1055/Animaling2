<?php

namespace App;

class Init{

	private $rotas;
	private $con;

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

		echo "<br> inicalizou roras";

		$this->configurarRotas($arrayRotasAux);

	}

	public function run($url){
		echo "<br> executour rota".$url;
		foreach($this->rotas as $rota){
			if($rota['route'] == $url){
				$classe = 'App\Controllers\\'.ucfirst($rota['controller']);
				$action = $rota['action'];
				$controller = new $classe;
				echo "<br> acessando classe".$classe;
				echo "<br> acessando action:".$action;
				$controller->$action();
			}
		}
	}

	public function urlDigit(){
		return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
	}

	public function configurarRotas(array $pRotas){
		$this->rotas = $pRotas;
		echo "<br> configurou rtas";
	}


	public static function getDB(){
		try{
			echo "<br>iniciou db";
			//conexao com o banco de dados
			$con = new \PDO("mysql:host=localhost; dbname=bdanimalnet;charset=utf8","root","");
		}catch(PDOException $e){
			echo "erro".$e->getMessage();
		}
		return $con;
	}
}


?>