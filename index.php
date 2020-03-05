<!DOCTYPE html>
<html>
<head>
	<title>Conexão BD</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Cadastrar</h2>
	<form method="POST" action="salvar.php">
		Nome: <input type="text" name="nome" required=""><br>
		Data Nascimento: <input type="date" name="data" required="">
		<br>
		<input type="submit" name="cadastrar" value="Cadastrar">
	</form>
	
	<br>
	<br>
	
	<h2>Listar</h2>
	<form action="exibir.php">
		<input type="submit" name="exibir" value="Exibir">
	</form>
	
	<?php require 'exibir.php'; ?>
	
	<br>
	<br>
	
	<h2>Excluir</h2>
	<form method="POST" action="excluir.php">
		Informe o Id a ser excluído: <input name="id" type="text"><br>
    <input name="enviar" type="submit" value="Excluir">
	</form>

	<br>

	<h2>Editar</h2>
	<form method="POST" action="salvar.php">
		Nome: <input type="text" name="nome" required=""><br>
		Data Nascimento: <input type="date" name="data" required="">
		<br>
		<input type="submit" name="cadastrar" value="Editar">
	</form>


</body>
</html>