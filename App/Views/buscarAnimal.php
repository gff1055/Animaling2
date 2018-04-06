<?php
use App\Init;

if(!$ocorrenciasAnimal){
	echo "sem ocorrencias";
}
else{
	echo "<h3>Animais</h3>";
	foreach($ocorrenciasAnimal as $animal){
		echo "<br><b>Nome</b>:".$animal['nomeAnimal']." (".$animal['especie'].")<br><br>";

	}
}


?>