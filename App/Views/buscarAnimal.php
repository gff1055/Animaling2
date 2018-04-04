<?php
use App\Init
?>

<form method="Post" action="">
	<input type="text" name="termoBusca"/>
	<input type="submit" value="Buscar"/>
</form>


<?php

if(!$ocorrenciasAnimal){
	echo "sem ocorrencias";
}
else{
	foreach($ocorrenciasAnimal as $animal){
		echo "<br><b>Nome</b>:".$animal['nomeAnimal']." (".$animal['especie'].")<br><br>";

	}
}


?>