<?php
use App\Models\Status;
use App\Init;

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
	// exibe as postagens
	if($posts){
		foreach($posts as $post){
			?>
			<br><br><br>
			<a href="<?php echo Init::$urlRoot.'/'.$dadosAnimal['nick']?>"><?php echo $post['nomeAnimal']?></a><br>
			<a href="<?php echo Init::$urlRoot.'/'.$dadosAnimal['nick'].'/'.$post['codigoPost']?>">Editar</a>
			<a href="<?php echo Init::$urlRoot.'/'.$dadosAnimal['nick'].'/'.$post['codigoPost'].'/delete'?>">Excluir</a><br>
			<a href="<?php echo Init::$urlRoot.'/'.$dadosAnimal['nick'].'/'.$post['codigoPost']?>"><?php echo $post['dataStatus']?></a><br>
			<?php echo $post['conteudo']?><br>
			<?php
		}
	}
	else
		echo "<br>Nenhuma postagem<br>";
	?>

</div>

