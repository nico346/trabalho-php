<?php
  session_start();
   
if(isset($_POST['logar'])){	

    include ("conexaopetshop.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$query = "select login, senha from cliente where login='$login' and senha='$senha' ";
	
        $resultado = mysqli_query($con,$query);
 
         $i = 0;
		if (mysqli_num_rows($resultado) == 0){
			echo '<h6 style="margin-top: 10px;">Não foi possível logar</h6>';
		}
		else{
		while ($linha = mysqli_fetch_array($resultado)) {
		   //$login = $linha["login"];
                   //echo $login.", você está logado!";
                  
                    $_SESSION['logado'] = $linha['login'];
                    //echo $_SESSION['logado'];
                    header('Location: form_areacliente.php');
                }
                }
	
}

?>
