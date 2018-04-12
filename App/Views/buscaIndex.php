
<?php
/*use App\Init;

if(!empty($_POST['pesquisa'])){
	$titulo = $_POST['pesquisa']." - ";
}
else
	$titulo = "";
*/?>

<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa</title>
</head>
<body>

<form method="Post" action="../public/busca/">
	<input type="text" name="pesquisa"/>
	<input type="submit" value="Buscar"/>
	<input type="hidden" name="tipoPesquisa" value="Donos">
</form>

</body>
</html>
