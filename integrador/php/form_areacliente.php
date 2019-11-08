<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
   <?php
       session_start();
   ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form name="form_areacliente" method="POST" action="cadastrar_cliente.php">

                <h3 align="right"><?php echo ("Seja bem vindo!  ". $_SESSION['logado']."!");?></h3>
                <?php  session_destroy();?>                   
        </form>
     
    </body>
</html>
