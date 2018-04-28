<?php

namespace App;

class Init{

	private $rotas;
	private $con;
	public static $urlRoot='/animaling2/public';
	public $rotaVar=3;

	function __construct(){
		$this->inicializarRotas();
		$urlAcessada=$this->urlDigit();
		$this->run($urlAcessada);
	}

	public function inicializarRotas(){
		
		$arrayRotasAux['buscaIndex'] = array(
			'route'=>Init::$urlRoot.'/busca',
			'controller'=>'controllerBusca',
			'action'=>'index'
		);

		$arrayRotasAux['buscaTemp'] = array(
			'route'=>Init::$urlRoot.'/',
			'controller'=>'controllerBusca',
			'action'=>'pagina'
		);


		/*$arrayRotasAux['buscaTudo'] = array(
			'route'=>Init::$urlRoot.'/busca/all',
			'controller'=>'busca',
			'action'=>'all'
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
		);*/

		$this->configurarRotas($arrayRotasAux);

	}

	public function run($url){
		$existe = 0;
		foreach($this->rotas as $rota){
			if($rota['route'] == $url){
				$existe=1;
				$classe = 'App\Controllers\\'.ucfirst($rota['controller']);
				$action = $rota['action'];
				$controller = new $classe;
				$controller->$action();
			}
		}
		if(!$existe){
			//extraindo os parametros da URL
			$rota = $this->getParamRoute($url);
			
			//verificando a estrutura da rota
			// caso a rota tenha apenas um parametro
			if(count($rota)==$this->rotaVar+1){
				//carregando as classe controller de animais e acionando a action index
				$classe = 'App\Controllers\ControllerAnimal';
				$action = 'index';
				$controller = new $classe;
				$controller->$action($rota[$this->rotaVar]);
				
			}

			//caso a rota tenha mais de um parametro
			elseif(count($rota)==$this->rotaVar+2){
				echo "<br> animal perfil ou status....<br>";
			}
		}
	}

	public function urlDigit(){
		return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
	}

	public function getParamRoute($url){
		echo "<br>".$url."<br>";
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