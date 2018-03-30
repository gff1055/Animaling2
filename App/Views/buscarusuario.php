<?php

if(!$ocorrencias){
	echo "sem ocorrencias";
}
foreach($ocorrencias as $dono){
	echo 
	"<br><b>Nome</b>:".$dono['nome'].
	"<br><b>Sobrenome</b>".$dono['sobrenome'].
	"<br><br>";

}


?>