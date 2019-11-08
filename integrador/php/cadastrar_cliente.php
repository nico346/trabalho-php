<?php
        if(isset($_POST["cadastrar"])){
    
    $nome = $_POST["nome_cliente"];
    $sobrenome = $_POST["sobrenome_cliente"];
    $tipo_logradouro = $_POST["tipo_logradouro"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $estado = $_POST["estado"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    include("conexaopetshop.php");

    $sqlcadcontato = "insert into contato (telefone,email) values('".$telefone."', '".$email."')";

    if(mysqli_query($con,$sqlcadcontato)){
    $sqlconsultC = "select * from contato";
    $resultconsultC = mysqli_query($con,$sqlconsultC);
    $codconsultC = mysqli_fetch_array($resultconsultC);
    $codcontato = $codconsultC['cod_contato'];  
    }
     
    $sqlcadendereco = "insert into endereco (cod_end,tipo_logradouro,logradouro,numero,bairro,estado,cep)
                    values(null,'".$tipo_logradouro."','".$logradouro."','".$numero."','".$bairro."','".$estado."','".$cep."')";
    $sqlcadcliente = "insert into cliente (nome_cliente,sobrenome_cliente,login,senha,cod_contato,cod_end)
                    values ('".$nome."','".$sobrenome."','".$login."','".$senha."','".$codcontato."',LAST_INSERT_ID())";
    
    if(mysqli_query($con, $sqlcadendereco)){
      if(mysqli_query($con, $sqlcadcliente)){
        echo '<h6 style="margin-top: 10px;">Cadastro efetuado com sucesso!</h6>';
    }else{
        echo '<h6 style="margin-top: 10px;">Não foi possível efetuar o cadastro<?h6>';
    }
    }
}
        ?>
