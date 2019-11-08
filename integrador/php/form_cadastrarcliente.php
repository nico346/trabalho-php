<!DOCTYPE html>
<html lang="pt-br">
  <head>
   <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caopanheiro - Cadastrar</title>

    <title>Cadastro</title>
  </head>
    <?php
    include("header.php")
    ?>
<section class="cad">
    <h2>Cadastrar</h2>
    <section class="msgright"><img src="../img/uparrow.png" width="50%">
    <p>Achou um animal na rua e possui vontade de colocá-lo para adoção? Ou quer adotar um de sua preferência? Clique em logar para obter acesso as demais opções, e se for novo, vá em cadastrar, ambas opções encontradas acima</p>
     </section>
    <form name="form_cadastrarcliente" method="POST" action="form_cadastrarcliente.php">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputName">Nome:</label>
      <input type="text" name="nome_cliente" required="required" class="form-control form-control-sm" id="inputName" placeholder="Nome" min="6" max="14">
    </div>
    <div class="form-group col-md-4">
      <label for="inputSobrenome">Sobrenome:</label>
      <input type="text" name="sobrenome_cliente" class="form-control form-control-sm" id="inputSobrenome" placeholder="Sobrenome" required="required" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputCEP">Telefone:</label>
      <input type="text" name="telefone" class="form-control form-control-sm cel-sp-mask" id="inputTEL" required="required" max="11" placeholder="(00) 00000-0000">
    </div>
      <div class="form-group col-md-4">
      <label for="inputEmail">E-mail:</label>
      <input name="email" class="form-control form-control-sm" id="inputEmail" placeholder="E-mail" required="required" max="10">
    </div>
    <div class="form-group col-md-3">
      <label for="inputLogin">Login:</label>
      <input name="login" class="form-control form-control-sm" id="inputEmail" placeholder="Login" required="required" max="10">
    </div>
    <div class="form-group col-md-3">
      <label for="inputsenha">Senha:</label>
      <input type="password" name="senha" class="form-control form-control-sm " id="inputsenha" required="required" min="6" max="14" placeholder="******">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-3">
      <label for="inputEstado">Tipo logradouro:</label>
      <select name="tipo_logradouro" class="form-control form-control-sm" id="inputEstado" placeholder="rua / travessa / avenida" required="required" max="10">
        <option value="0" selected>Escolher...</option>
        <option >Rua</option>
        <option >Avenida</option>
        <option >Travessa</option>
      </select>
  </div>
  <div class="form-group col-4">
    <label for="inputAddress2">Logradouro:</label>
    <input type="text" name="logradouro" class="form-control form-control-sm" id="inputAddress2" placeholder="dos Bobos" required="required">
  </div>
    <div class="form-group col-2">
      <label for="inputCity">Número:</label>
      <input type="text" name="numero" required="required" placeholder="nº 00" class="form-control form-control-sm" id="inputCity" data-mask="00000" max="5" autocomplete="off">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCEP">Bairro:</label>
      <input type="text" name="bairro" placeholder="Bairro onde moras" class="form-control form-control-sm" id="inputCEP" required="required">
    </div>
     <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEstado">Estado:</label>
      <select id="inputEstado" class="form-control form-control-sm" name="estado" required="required">
        <option value="0" selected>Escolher...</option>
        <option>RJ</option>
        <option>SP</option>
      </select>
    </div></div>
  
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP:</label>
      <input type="text" name="cep" placeholder="00000-000" class="form-control cep-mask form-control-sm" id="inputCEP" >
    </div>
  </div>

<?php
include("cadastrar_cliente.php")
?>
  <div class="form-row">
  <button type="submit" class="btn btn-primary col-md-2" name="cadastrar">Cadastrar</button></div>


</form>
</section>
    <?php
    include("footer.php")
    ?>