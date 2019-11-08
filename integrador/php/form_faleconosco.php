<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Css/layout.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caopanheiro - Fale conosco</title>
</head>
<body>
<section class="container">
    
    <h1><img src="../img/gato.png" width="15%">CAOPANHEIRO<img class="dogao" src="../img/dog.png" width="9%"><br> Pet Shop</h1>
    <nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="../html/index.php"><img src="../img/logo.png" height="50px" width="130px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../html/index.php"><i class="fas fa-home"></i>Home <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../html/artigos.php"><i class="far fa-newspaper"></i>Artigos</a>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-sort-amount-down"></i>Sobre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item active" href="../html/sobrenos.php"><i class="fas fa-address-card"></i>Sobre nós</a>
          <a class="dropdown-item active" href="../html/sobreosite.php"><i class="far fa-address-card"></i>Sobre nosso site</a>
          <div class="dropdown-divider"></div>
           <a class="dropdown-item active" href="../php/form_faleconosco.php"><i class="fas fa-headset"></i>Fale conosco</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="../php/form_login.php"><i class="fas fa-folder-open"></i>Login</a>
      </li>
     <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../php/form_cadastrarcliente.php"><i class="far fa-folder-open"></i>Cadastrar</a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-info my-2 my-sm-0 bg-dark" type="submit">Pesquisar</button>
    </form>-->
  </div>
</nav>
<section class="msgright"><img src="../img/uparrow.png" width="50%">
    <p>Achou um animal na rua e possui vontade de colocá-lo para adoção? Ou quer adotar um de sua preferência? Clique em logar para obter acesso as demais opções, e se for novo, vá em cadastrar, ambas opções encontradas acima</p>
     </section> 
    <h1 id="faleconoscoh1">Fale Conosco</h1>
<img src="../img/ratatoo.png" id="faleconoscoimg" width="20%" style="float: left; margin-top: 10px;">
    <form id="faleconosco" name="form_faleconosco" method="POST" action="form_faleconosco.php">
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Nome completo:</label>
      <input type="text" name="nome" class="form-control form-control-sm" id="inputName" placeholder="Insira seu nome inteiro" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">E-Mail:</label>
      <input type="email" name="email" required="required" class="form-control form-control-sm" id="inputEmail4" placeholder="nome@example.com">
    </div></div>
    <div class="form-group">
      <label for="inputAssunto">Assunto:</label>
      <input type="text" name="assunto" class="form-control form-control-sm" id="inputAssunto" placeholder="Assunto" required="required">
    </div>
  </div><div class="form-group">
      <label for="inputMensagem">Mensagem:</label><br>
      <textarea name="mensagem" rows="7" cols="47" style="width: 100%;" placeholder="Digite a mensagem ou pergunta que tens para nós..."></textarea><br><br></div>

  <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
  <button type="reset" class="btn btn-primary" name="resetar">Resetar</button>

  <?php
        if(isset($_POST["enviar"])){
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];
    $data = date("Y-m-d");

    include("conexaopetshop.php");
     
    $sqlfaleconosco = "insert into faleconosco (nome,email,assunto,mensagem, data_call)
                    values ('".$nome."','".$email."','".$assunto."','".$mensagem."','".$data."')";
    
    if(mysqli_query($con, $sqlfaleconosco)){
        echo "Mensagem enviada com sucesso, favor aguardar nossa resposta por E-Mail em até 24 horas.";
    }else{
        echo "Não foi possível enviar sua mensagem";
    }
    }
        ?>
</form> 
<?php
include("footer.php")
?>