<?php
use App\Init
?>

<form method="Post" action="">
	<input type="text" name="termoBusca"/>
	<input type="submit" value="Buscar"/>
</form>


<?php

if(!$ocorrenciasStatus){
	echo "sem ocorrencias";
}
else{
	foreach($ocorrenciasStatus as $status){
		echo 
		"<br><b>Nome</b>:".$status['nome']."<br><br>";

	}
}


?>