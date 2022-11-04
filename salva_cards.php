<?php 

include('conn/conn.php');

$tituloCards =  $_POST['titulo'];
$textoCards = $_POST['texto'];
$data = $_POST['data'];

if(isset($_FILES['imagem'])){
    //Tratamento no nome do arquivo
    $ext = strtolower(substr($_FILES['imagem']['name'], -4)); //Pega a extensão sem o nome
    $novo_nome = date("Y-m-d-H:i:s").$ext; //Definir o nome com uma data, hora, minuto e segundo

    // Realiza o upload do arquivo
    $dir = "imagens/"; // Diretorio para realizar o upload da imagem
    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$novo_nome);
    $imagem = $novo_nome;
    $mensagem = "Imagem enviada com sucesso";
}else{
    $mensagem = "Erro ao carregar a imagem";
}

$query = "INSERT INTO cards (titulo, texto, imagem, data) VALUES ('$tituloCards', '$textoCards', '$imagem', '$data')";
mysqli_query($link, $query);

//print_r($query);
//echo $tituloCards;
header('location: index.php');
exit;






?>