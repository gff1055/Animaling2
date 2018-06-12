<?php

if (!$seguidores)
	echo "Esta conta nao segue ninguem";
else{
	foreach($seguidores as $seguidor){
		echo "<b>".$seguidor['nomeSeguidor']."</b><br>";
		echo $seguidor['descricaoSeguidor']."<br>";
		echo "<br>";
	}
}

?>