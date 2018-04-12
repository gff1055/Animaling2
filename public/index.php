<?php


require_once "../vendor/autoload.php";
use App\Init;



$init = new Init();
//echo $init->urlDigit();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa</title>
</head>
<body>

<form method="Post" action="../public/busca">
	<input type="text" name="pesquisa"/>
	<input type="submit" value="Buscar"/>
	<input type="hidden" name="tipoPesquisa" value="Donos">
</form>

</body>
</html>