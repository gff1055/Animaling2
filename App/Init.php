<?php

namespace App;

class Init{

	private $rotas;
	private $con;
	public static $urlRoot='/animaling2/public';
	public $rotaVar=3;

	function __construct(){
		$urlAcessada=$this->urlDigit();
		$urlDividida = $this->getParamRoute($urlAcessada);
		$this->inicializarRotas($urlDividida);
		$this->run($urlAcessada);
	}

	public function inicializarRotas($pUrlDividida){
		
		echo count($pUrlDividida);


		$arrayRotasAux['buscaIndex'] = array(
			'route'=>Init::$urlRoot.'/busca',
			'controller'=>'controllerBusca',
			'action'=>'index',
			'value'=>''
		);

		$arrayRotasAux['buscaTemp'] = array(
			'route'=>Init::$urlRoot.'/',
			'controller'=>'controllerBusca',
			'action'=>'pagina',
			'value'=>''
		);

		$arrayRotasAux['pagProfAnimal'] = array(
			'route'=>Init::$urlRoot.'/'.$pUrlDividida[3],
			'controller'=>'controllerAnimal',
			'action'=>'index',
			'value'=>$pUrlDividida[3]
		);

		// Verifica se o endereco possui mais subdominios
		if(count($pUrlDividida)==5)
		$arrayRotasAux['verPostAnimal'] = array(
			'route'=>Init::$urlRoot.'/'.$pUrlDividida[3].'/'.$pUrlDividida[4],
			'controller'=>'controllerAnimal',
			'action'=>'verPost',
			'value'=>$pUrlDividida[4]
		);


		$this->configurarRotas($arrayRotasAux);

	}

	public function run($url){
		$achou = 0;
		foreach($this->rotas as $rota){
			if($rota['route'] == $url && !$achou){
				$achou=1;
				$classe = 'App\Controllers\\'.ucfirst($rota['controller']);
				$action = $rota['action'];
				$controller = new $classe;
				$controller->$action($rota['value']);
			}
		}
	}

	public function urlDigit(){
		return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
	}

	public function getParamRoute($url){
		//echo "<br>".$url."<br>";
		$url = explode ("/", $url);
		return $url; //veja como fica a saída
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