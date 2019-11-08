<html>
<head>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link href="../css/signin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
      img{border-radius: 10px;}
    </style>
  <title>Caopanheiro - Login</title>
</head>
<body class="text-center">
<?php
include("header.php")
?>

    <form name="form_login" method="POST" action="form_login.php" class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Fazer login</h1>
      <div img>
      <img class="mb-4" src="..\img\logo.png" alt="" width="150" height="72"></div>
      <label for="inputEmail" class="sr-only">Nome de Usuário</label>
      <input type="text" id="inputEmail" name="login" class="form-control" placeholder="Seu login" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
      </div>
        <button class="btn btn-lg btn-primary btn-block" name="logar" type="submit">Login</button>
<?php
include("logar.php")
?>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
      </div>
    </div>
  </div>
</div></div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>