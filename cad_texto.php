<?php
session_start();

error_reporting(0);
ini_set("display_errors", 0);

include("conn/conn.php");

$queryCards = "SELECT * FROM cards ORDER BY id DESC LIMIT 4";
$resultCards = mysqli_query($link, $queryCards);

$pagina = "salva_cards.php";

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

<body style="overflow: hidden">


  <table style="background-color: #f5f5f5;" width="900px" height="890px;" align="center">
    <!-- border é para criar bordas, width é o tamanho da tabela -->

    <tr>
      <!-- Linha da Tabela -->
      <td style="padding-left: 15px;">
        <!-- Coluna da Tabela, height é altura -->
        <a href="index.php"><img src="imagens/logo_02.png" style="width: auto;"></a>
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

    <tr>

      <td colspan="2" style="padding-left: 50px; padding-right: 50px;">

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
        <td colspan="2" style="padding-left: 50px; padding-right: 50px; padding-bottom: 20px; padding-top: 20px;">
        <form id="idForm" method="POST"  action="<?php echo $pagina; ?>" enctype="multipart/form-data"> 
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o Título">
            <div id="tituloInvalido" class="invalid-feedback"></div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Texto</label>
            <input type="text" class="form-control" id="texto" rows="3"  name="texto" placeholder="Digite o Texto">
            <div id="textoInvalido" class="invalid-feedback"></div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Foto do Card</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="imagem">
              <label class="custom-file-label" for="customFile" style="width: 350px;">Escolher imagem</label>
            </div>
        </div>   
        <div>
            <label for="exampleFormControlTextarea1">Data</label><br>
            <input type="date"  id="data" name="data">
            <div id="dataInvalido" class="invalid-feedback"></div>
        </div>
        <hr>
        <button type="submit" class="btn btn-secondary">Enviar</button>
        </form>

        </td>
    </tr>

  </table>

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