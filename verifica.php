<!DOCTYPE html>
<html>
<head>
	<title>Verificar</title>
	<meta charset="utf-8">
</head>
<body>

<?php 

$nome 		= $_POST['nome'];
$email 		= $_POST['email'];
$contato 	= $_POST['contato'];  	
$erro 			 = 0;	

//Verifica se o campo nome não está em branco
if (empty($nome) OR strstr($nome, ' ')== false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

//Verifica se o campo email está preenchido corretamente
if (strlen($email)< 8 || strstr($email, '@')== false) {
	echo "Favor digitar o seu email corretamente.<br>";
	$erro = 1;
}

//Verificar se o campo do contato já foi preenchido corretamente
if(strlen($contato)<8 || strlen($contato) == false){
	echo "Favor digitar o seu telefone corratamente.<br>";
}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'insere.php';
}

 ?>
</body>
</html>