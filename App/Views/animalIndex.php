<?php
use App\Models\Status;

?>

<div>
	<br>
	<?php echo $dadosAnimal['nome']?><br>
	<?php echo $dadosAnimal['sexo']?><br>
	<?php echo $dadosAnimal['especie']?><br>
	<?php echo $dadosAnimal['nascimento']?><br>
	<?php echo $dadosAnimal['descricao']?><br>
	<br>
</div>

<!--<form method="post" action="../public/<?php echo $dadosAnimal['nick']?>/newpost"> -->
<form method="post" action="">
	<input type="text" name="novoPost"/>
	<input type="submit" value="Postar">
	
</form>

<div>
	<?php
	if($posts){
		foreach($posts as $post){
			echo 
			"<br><br><br>"
			.$post['nomeAnimal'].
			"<br>
			<a href='../e'>Editar</a> <a href=''>Excluir</a> 
			<br>"
			.$post['dataStatus'].
			"<br>"
			.$post['conteudo'];
		}
	}
	else
		echo "<br>Nenhuma postagem<br>";
	?>

</div>

