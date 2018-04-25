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
	<input type="text" name="pesquisa" value="<?php echo $_POST['pesquisa']?>" />
	<input type="submit" value="Buscar"/>
	<br> Pesquisar por: &nbsp
	<input type="radio" name="tipoPesquisa" value="Tudo">Tudo 
	<input type="radio" name="tipoPesquisa" value="Animais">Animais
	<input type="radio" name="tipoPesquisa" value="Posts" checked>Posts
</form>

<?php
if(!empty($_POST['pesquisa'])){
	if($ocorrenciasPosts){
		foreach($ocorrenciasPosts as $postagem){
			echo "<br><b>".$postagem['nomeAnimal']."</b><br>".$postagem['acontAgora']."<br><br>";
		}
	}
	else{
		echo "sem ocorrencias";
	}
}
?>
</body>
</html>

<?php

/*if(!$ocorrenciasStatus){
	echo "sem ocorrencias";
}
else{
	foreach($ocorrenciasStatus as $status){
		echo 
		"<br><b>:".$status['nomeAnimal']."</b>".$status['acontAgora']."<br><br>";

	}
}
*/

?>