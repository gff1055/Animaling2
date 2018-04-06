<?php
use App\Init
?>

<?php

if(!$ocorrenciasDono){
	echo "sem ocorrencias";
}
else{
	echo "<h3>Donos</h3>";
	foreach($ocorrenciasDono as $dono){
		echo 
		"<br><b>Nome</b>:".$dono['nome'].
		"<br><b>Sobrenome</b>:".$dono['sobrenome'].
		"<br><br>";

	}
}


?>