<?php
use App\Init
?>

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