<?php   	

	$servidor = "localhost";
	$username = "root";
	$password = "";
	$database = "teste_conexao";

	
	//$data = $_GET['data'];

	$connection = mysqli_connect($servidor, $username, $password, $database);
	$id = $_POST['id'];
	$sql = mysqli_query($connection, "DELETE FROM teste WHERE id ='$id'") 
   	or die(mysqli_error($connection) //caso haja um erro na consulta 
	);

	header('location: index.php'); // mantem-se na página de cadastro
    exit();
?>