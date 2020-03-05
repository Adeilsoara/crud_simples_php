<?php
	$servidor = "localhost";
	$username = "root";
	$password = "";
	$database = "teste_conexao";

	$nome = $_POST['nome'];
	$data = $_POST['data'];

	$connection = mysqli_connect($servidor, $username, $password, $database);
	if (!$connection) {
		die('Nao conectado:' . mysqli_error());
	}
	@mysqli_select_db($teste_conexao);
	mysqli_set_charset($connection, 'utf8');
	
	$sql2 = mysqli_query($connection, "SELECT data FROM teste WHERE data ='$data' ");
   	if(mysqli_num_rows($sql2)===0){
       //se não retornou nada imprimimos um msg dizendo que não houve alteração
      /* echo "Não foi inserido nenhum registro!!!";*/
    $sql   = mysqli_query($connection, "INSERT INTO teste(nome, data) VALUES ('$nome', '$data')");
       mysqli_close($connection);//fecha conexão sempre
   	}else{
       //se maior que zero é que houve mudança na tabela e exibe msg de sucesso
      // echo "Não pode inserir dados repetidos de Data: $data";
       mysqli_close($connection);//fecha conexão sempre
       header('location: index.php'); // mantem-se na página de cadastro
       exit();
   }
   
  
?>