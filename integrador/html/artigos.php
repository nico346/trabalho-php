<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Css/layout.artigos.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caopanheiro - Artigos</title>
</head>
<?php require('header.php'); ?>
  
  <!-- h2>Artigos</h2 -->


  <!-- hr style="margin-right: 12%" -->

 <?php

$conn = mysqli_connect("localhost","root","","petshop") or die(mysqli_error());
// MySQL em UTF-8 --> Corrige acentuação
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET character_set_connection=utf8");
mysqli_query($conn, "SET character_set_client=utf8");
mysqli_query($conn, "SET character_set_results=utf8");

// Função que mostra as categorias dos artigos
function categorias($conn) {

    // Inicializando variáveis
    $catAll = "";

    // Obtendo todas as categorias ativas
    $dados = mysqli_query($conn, "SELECT categorias FROM artigos WHERE data <= NOW() AND status = '1'");

    // Monta uma lista de categorias separadas por vírgulas em "$catAll"
    while ($cats = $dados->fetch_assoc()):
        $catAll .= "{$cats['categorias']},";
    endwhile;

    // Conserta vírgulas e espaços
    $catAll = str_replace(array(",,", ", "), array("", ","), $catAll);

    // Remove última vírgula da lista
    $catAll = substr($catAll, 0, -1);

    // Cria um array com as categorias
    $catArr = explode(",", $catAll);

    // Remove as categorias repetidas e faz ordem alfabética
    $catArray = array_unique($catArr, SORT_REGULAR);
    sort($catArray);

    // Reciclando uma variável
    $catAll = NULL;

    // Monta uma lista de categorias com os devidos links
    foreach ($catArray AS $cat):
        $catAll .= "<li><a href=\"artigos.php?cat={$cat}\" title=\"Ver artigos em {$cat}\">{$cat}</a></li>\n";
    endforeach;

    // Formatando HTML
    $out = <<<HTML
<div class="sTitle">Artigos por Categoria</div>
<div class="sContent">    
  <ul>{$catAll}</ul>
</div>
<div class="sFooter">
  <a href="artigos.php">Todas as Categorias</a>
</div>
HTML;

    // Saída
    return $out;
}

//////////////////////////////
// Lista de artigos do site //
//////////////////////////////
/*
By Luferat - http://www.luferat.net/
Este é um script básico que obtém uma lista de artigos da tabela "artigos" do banco de dados.
Estude este código com atenção para entender o que ele faz e adapte-o ao seu CASE.

    OBS: para ver a criação da tabela no MySQL, estude o arquivo "meusite.sql" nesta mesma pasta.

*/

// Obtendo categoria da URL
$cat = (isset($_GET['cat'])) ? trim($_GET['cat']) : false;

/* Obtém todos os artigos do banco de dados:
    • Ordenados pela data, com os mais recentes primeiro;
    • Somente da data atual para trás, os agendados para o futuro não aparecem;
    • Somente os com "status" ativo (status = 1); */
// Se escolheu categoria, prepara o SQL
if ($cat):
  $sql = "SELECT id, imagem, titulo, chamada FROM artigos WHERE categorias LIKE '%{$cat}%' AND data <= NOW() AND status = '1' ORDER BY data DESC";
  $title = "Artigos Recentes em \"{$cat}\"";
else:
  $sql = "SELECT id, imagem, titulo, chamada FROM artigos WHERE data <= NOW() AND status = '1' ORDER BY data DESC";
  $title = "Artigos Recentes";
endif;
$res = mysqli_query($conn, $sql);
$total = mysqli_num_rows($res);
$total = ($total == 1) ? "Somente 1 artigo." : "<h5 style='margin-left: 10px;'>{$total} artigos. Mais recentes aparecem primeiro.</h5>";

// Inicializando variável com lista de artigos
$listaArtigos = "";

// Listando tudo que foi obtido, usando um loop, na variável
while($artigo = mysqli_fetch_array($res)):

    $listaArtigos .= <<<ARTIGO
    
    <div class="artigosBox">
        <a href="artigo.php?id={$artigo['id']}"><img src="{$artigo['imagem']}" alt="{$artigo['titulo']}"></a>
        <h3><a href="artigo.php?id={$artigo['id']}">{$artigo['titulo']}</a></h3>
        {$artigo['chamada']}
        <a href="artigo.php?id={$artigo['id']}">Ler tudo...</a>    
    </div>
    
ARTIGO;
    
endwhile;

// Obtém lista de categorias dos artigos
$categorias = categorias($conn);

// Renderizando lista de artigos e categorias
echo <<<HTML
<h2 class="tituloartigos">{$title}</h2>
<hr>
<p class="subtitulo">{$total}</p>
<section>
    <div>{$listaArtigos}</div>
    <aside>{$categorias}</aside>
</section>
HTML;

 ?>

    <div class="altbox">
    <section class="row" style="margin-right: 0px;">
        
<?php

include("footer.php")
?>