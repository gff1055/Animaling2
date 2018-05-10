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

<form method="post" action="../public/<?php echo $dadosAnimal['nick']?>/newpost">

	<input type="text" name="novPost"/>
	<input type="submit" value="Postar">

</form>

<div>
	<?php
	if($posts){
		foreach($posts as $post){
			echo 
			"<br><br><br>".
			$post['nomeAnimal']."<br>".
			$post['dataStatus']."<br>".
			$post['conteudo'];

		}
	}
	else
		echo "<br>Nenhuma postagem<br>";
	?>

</div>

