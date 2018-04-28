<form method="Post" action="">
	<input type="text" name="pesquisa" value="<?php echo $_POST['pesquisa']?>" />
	<input type="submit" value="Buscar"/>
	<br> Pesquisar por: &nbsp
	<input type="radio" name="tipoPesquisa" value="Tudo">Tudo
	<input type="radio" name="tipoPesquisa" value="Animais" checked>Animais
	<input type="radio" name="tipoPesquisa" value="Posts">Posts
</form>

<?php
if(!empty($_POST['pesquisa'])){
	if($ocorrenciasAnimal){
		foreach($ocorrenciasAnimal as $animal){
			echo
			"<br><b>".$animal['nome']."</b>
			<br>".$animal['descricao']."<br>";
		}
	}
	else{
		echo "sem ocorrencias";

	}

}
?>