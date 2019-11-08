<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Css/layout.artigos.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caopanheiro - Artigos</title>
</head>
<?php

//////////////////////////////
// Exibe artigos solicitado //
//////////////////////////////
/*
By Luferat - http://www.luferat.net/
Este é um script básico que obtém o ID de umartigo da tabela "artigos" do banco de dados e o exibe.
Estude este código com atenção para entender o que ele faz e adapte-o ao seu CASE.

    OBS: para ver a criação da tabela no MySQL, estude o arquivo "meusite.sql" nesta mesma pasta.

*/

// Obtendo o ID do artigo
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Se não passou um ID válido, redireciona para a lista de artigos usando JavaScript
if ($id == 0) exit("<script>location.href='/artigos.php'</script>");

// Conexão com MySQL
require($_SERVER['DOCUMENT_ROOT'] . '/config.php');

/* Obtém o artigo solicitado do banco de dados:
    • Somente da data atual para trás. Se agendado para o futuro, não aparece;
    • Somente se "status" ativo (status = 1); */
$sql = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') as dataBr FROM `artigos` WHERE id = '{$id}' AND data <= NOW() AND status = '1';";
$res = mysqli_query($conn, $sql);

// Se não achou nada, redireciona para a lista de artigos usando JavaScript
if(mysqli_num_rows($res) != 1) exit("<script>location.href='/artigos.php'</script>");

// Listando tudo que foi obtido, usando um loop
$artigo = mysqli_fetch_array($res);

// Link do autor
if ($artigo['autorlink'] != "") {
	// Se autor tem um site
	$autorDados = "<a href=\"{$artigo['autorlink']}\" target=\"_blank\">{$artigo['autor']}</a>";
} else {
	// Autor não tem site
	$autorDados = $artigo['autor'];
}

// Inicializa lista de categorias
$catList = "";

// Obtem categorias para um array
$cats = explode(',', $artigo['categorias']);

// Monta link para cada categoria
foreach ($cats as $valor) {
	$valor = trim($valor);
	//$linkValor = strtolower($valor);
	$catList .= "<a href=\"artigos.php?cat={$valor}\">{$valor}</a>, ";
}
$catList = substr($catList, 0, -2);

// Carrega cabeçalho HTML
require('header.php');

echo <<<ARTIGO

<h2>{$artigo['titulo']}</h2>
<hr>
<p class="subtitulo">Por {$autorDados} em {$artigo['dataBr']}.</p>
<div class="artigoHTML">{$artigo['html']}</div>

<p class="categorias"><b>Categorias:</b> {$catList}.</p>

<p class="voltar"><a href="artigos.php">&laquo; Voltar para os artigos</a></p>

ARTIGO;

// Carrega rodapé HTML
require('footer.php');
?>