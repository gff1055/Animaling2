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
	<input type="text" name="pesquisa"/>
	<input type="submit" value="Buscar"/>
	<input type="radio" name="tipoPesquisa" value="Animais">
	<input type="radio" name="tipoPesquisa" value="Donos">
	<input type="radio" name="tipoPesquisa" value="Posts">
</form>

<?php
if(!empty($_POST['pesquisa'])){
	if($ocorrenciasDono){
		foreach($ocorrenciasDono as $dono){
			echo 
			"<br><b>Nome</b>:".$dono['nome'].
			"<br><b>Sobrenome</b>:".$dono['sobrenome'].
			"<br><br>";
		}
	}
	else{
		echo "sem ocorrencias";
	}
}
?>


</body>
</html>
