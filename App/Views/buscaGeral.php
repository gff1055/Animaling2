
<?php
use App\Init;

if(!empty($_POST['pesquisa'])){
	$titulo = $_POST['pesquisa']." - ";
}
else
	$titulo = "";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo ?>Pesquisa</title>
</head>
<body>

<form method="Post" action="">
	<input type="text" name="pesquisa" value="<?php echo $_POST['pesquisa']?>"/>
	<input type="submit" value="Buscar"/>
	<br> Pesquisar por: &nbsp
	<input type="radio" name="tipoPesquisa" value="Tudo" checked>Tudo 
	<input type="radio" name="tipoPesquisa" value="Animais">Animais
	<input type="radio" name="tipoPesquisa" value="Donos">Donos
	<input type="radio" name="tipoPesquisa" value="Posts">Posts
</form>

<?php
$possuiResultados = 0;
if(!empty($_POST['pesquisa'])){
	if($ocorrenciasDono){
		echo "<h3>Donos</h3>";
		foreach($ocorrenciasDono as $dono){
			echo 
			"<br><b>Nome</b>:".$dono['nome'].
			"<br><b>Sobrenome</b>:".$dono['sobrenome'].
			"<br><br>";
		}
		$possuiResultados+=1;
	}
	if($ocorrenciasAnimal){
		echo "<h3>Animais</h3>";
		foreach($ocorrenciasAnimal as $animal){
			echo
			"<br><b>Nome</b>:".$animal['nomeAnimal']." (".$animal['especie']." de ".$animal['nomeDono'].")<br><br>";
		}
		$possuiResultados+=1;
	}
	if($ocorrenciasPost){
		echo "<h3>Posts</h3>";
		foreach($ocorrenciasPost as $postagem){
			echo "<br><b>".$postagem['nomeAnimal']."</b><br>".$postagem['acontAgora']."<br><br>";
		}
		$possuiResultados+=1;
	}
	if (!$possuiResultados){
		echo "NA FORAM ACHADOS RESULTADOS";
	}
}
?>