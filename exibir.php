<?php   	

	$servidor = "localhost";
	$username = "root";
	$password = "";
	$database = "teste_conexao";

	$connection = mysqli_connect($servidor, $username, $password, $database);
	$sql = mysqli_query($connection, "SELECT * FROM teste") 
   	or die(mysqli_error($connection) //caso haja um erro na consulta 
	);
 


// Exibir os dados do banco em outra pagina.php
 /*echo "<table border=1>";
while($exibe = mysqli_fetch_assoc($sql)){
   echo "<tr><td>Nome:</td>";
   echo "<td>".$exibe["nome"]."</td></tr>";
   echo "<tr><td>Data:</td>";
   echo "<td>".$exibe["data"]."</td></tr>";
}
echo "</table>";*/

// Exbir os dados na mesma página .php utilizando a função REQUIRE no index.php
echo "<table width= 400px border=1 cellspacing=0>";
echo "<tr>";
echo "<td><strong>Id</strong></td>";   
echo "<td><strong>Nome</strong></td>";
echo "<td><strong>Data</strong></td>";
echo "</tr>";    
while ($exibe = mysqli_fetch_assoc($sql)) 
{
    echo '<tr>';
    echo '  <td>'.$exibe["id"].'</td>';
    echo '  <td>'.$exibe["nome"].'</td>';
    echo '  <td>'.$exibe["data"].'</td>';
    echo '</tr>';
 }
echo "</table>";


?>