
<?php

include("conn/conn.php");

//Criando variveis com os caracteres que serão salvos ao usuario alocar no formulário os seus dados
$nome_user = $_POST["nome"];
$email_user = $_POST["email"];
$nacionalidade_user = $_POST["nacionalidade"];

//varivael $queryConn vai receber um comando SQL para inserir os dados na tabela constech
$queryConn = "INSERT  INTO  cad_client VALUES";
$queryConn = "('$nome_user','$email_user','$nacionalidade_user')"; 

$queryCards = "SELECT * FROM cards ORDER BY id DESC LIMIT 4";
$resultCards = mysqli_query($link, $queryCards);




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="Estilo.css">

  <title>CONSTECH Concessionárias</title>
</head>

<body>


  <table style="background-color: #f5f5f5;" width="900px" height="1500px;" align="center">
    <!-- border é para criar bordas, width é o tamanho da tabela -->

    <tr>
      <!-- Linha da Tabela -->
      <td style="padding-left: 15px;">
        <!-- Coluna da Tabela, height é altura -->
        <img src="imagens/logo_02.png" style="width: auto;">
      </td>

      <td>
        <!-- align alinha o conteudo para direita esquerda e etc-->

        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-item" href="index.php">Início</a> |
          </li>
          <li class="nav-item">
            <a class="nav-item" href="#">Sobre a Empresa</a> |
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-item" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Veiculos <i class="bi bi-caret-down"></i></i>
              </a> |

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
              <a class="nav-item" href="cad_texto.php">Cad. Card</a>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-item" href="#">Contato</a>
          </li>
        </ul>
      </td>

    </tr>

    <!--
    <tr>

      <td colspan="2">
        colspan="2" é para ocupar um certo espaço de colunas 
        <img src="">
      </td>

    </tr>
    -->

    <tr>

      <td colspan="2" style="padding: 50px; padding-top: 0px;">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-900" src="imagens/banner_01.png" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-900" src="imagens/banner_02.png" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-900" src="imagens/banner_03.png" alt="Terceiro Slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>

      </td>
    </tr>
    <tr>
    
  <td colspan="2" style="padding-top: 0px; margin-right: -100px; height: auto; margin-top: 90px;">
        
    <div class="row">
      <?php
        while($linhaCards = mysqli_fetch_assoc($resultCards)){
      ?>
      <div class="card" style="width: 288px; margin-left:50px;">
        <img class="card-img-top" src="imagens/<?php echo $linhaCards['imagem']?>" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">
            <?php  echo $linhaCards['titulo']; ?> 
          </h5>
          <p class="card-text" style="padding-bottom: 30px;">
            <?php echo $linhaCards['texto'];?>
          </p>        
        </div>
        <div class="btn-mais">
          <button type="button" class="btn btn-secondary"> <i class="bi bi-search"></i> Buscar</button>     
        </div>
      </div>
      <?php
        }
      ?>
        
    </div>
  </td>
      

    </tr>

  <tr style="margin-top: 20px; margin-bottom: 20px;">

      <td colspan="2">
        <div>
          <img src="imagens/tabela.png" style="width: 1380px; margin-top: 30px;">
        </div>
      </td>

    </tr>


  </table>

  <form class="formulário" id="form" style="margin-left: 200px;">
    <div class="form-group">
    <label for="exampleInputEmail1" style="color: #FFFF;">Nome do Cliente</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="name" placeholder="Seu Nome" style="width: 600px;">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" style="color: #FFFF;">Email do Cliente</label>
      <input type="email" class="form-control" id="exampleInputEmail" placeholder="Seu Email" style="width: 600px;">
    </div>
    <div class="form-group form-group-lg">
      <label for="exampleInputSelect" style="color: #FFFF;">Selecione o estado</label>
      <select class="form-control form-control-lg" style="width: 200px;">
        <option>SELECIONE</option>
        <option><?php echo "ALAGOAS" ?></option>
        <option><?php echo "CEÁRA" ?></option>
        <option>RIO GRANDE DO SUL</option>
        <option>RIO GRANDE DO NORTE</option>
        <option>SÃO PAULO</option>
        <option>RIO DE JANEIRO</option>
        <option>PARANÁ</option>
        <option>SANTA CATARINA</option>
        <option>MATO GROSSO DO SUL</option>
        <option>MATO GROSSO</option>
        <option>TOCANTINS</option>
        <option>PERNAMBUCO</option>
        <option>ESPÍRITO SANTO</option>
        <option>SERGIPE</option>
        <option>BRASÍLIA DF</option>
        <option>AMAZONAS</option>
        <option>RONDONIA</option>
        <option>ACRE</option>
        <option>RORAIMA</option>
        <option>PARÁ</option>
        <option>GOIÁS</option>
        <option>MINAS GERAIS</option>
        <option>BAHIA</option>
        <option>MARANHÃO</option>
        <option>PIAUÍ</option>
      </select>
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1" style="color: #FFFF;">TELEFONE / CONTATO</label>
        <input type="number" class="form-control" id="exampleInputNumber" placeholder="Seu contato" style="width: 400px;">
      </div>
    </div>
    <button type="button" class="btn btn-lg" onclick="cad_btn">CADASTRAR</button>
  </form>



  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>