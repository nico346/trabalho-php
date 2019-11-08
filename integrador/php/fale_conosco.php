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
        echo "Mensagem enviada com sucesso, favor aguardar nossa resposta por E-Mail em até 24 horas";
    }else{
        echo "Não foi possível enviar sua mensagem";
    }
    }
 ?>