<?php 

include 'conn/conn.php';

$nome 			 = $_POST['nome'];
$email 			 = $_POST['email'];
$contato  	 	 = $_POST['contato'];


$sql = "INSERT INTO constech VALUES";
$sql .= "('$nome','$email', '$contato')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

