<?php
use App\Init
?>

<form method="Post" action="">
	<input type="text" name="termoBusca"/>
	<input type="submit" value="Buscar"/>
</form>


<?php

if(!$ocorrenciasDono){
	echo "sem ocorrencias";
}
else{
	foreach($ocorrenciasDono as $dono){
		echo 
		"<br><b>Nome</b>:".$dono['nome'].
		"<br><b>Sobrenome</b>:".$dono['sobrenome'].
		"<br><br>";

	}
}


?>