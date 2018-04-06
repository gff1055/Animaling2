<?php
$temp="";

if(!empty($_POST["termoBusca"])){
	$temp=$_POST["termoBusca"];
}
?>
<form method="Post" action="">
	<input type="text" name="termoBusca" value="<?php echo $temp ?>" />
	<input type="submit" value="Buscar"/>
</form>