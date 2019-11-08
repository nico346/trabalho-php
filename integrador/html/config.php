<?php
// PHP em UTF-8
header('Content-Type: text/html; charset=utf-8');

///////////////////////
// Conexão com MySQL //
///////////////////////

// Verifica em que servidor estamos
if($_SERVER['SERVER_NAME'] == 'localhost'):
    // Se estamos no XAMPP, conecte-se com essas credenciais
    $conn = mysqli_connect('localhost', 'root', '', 'petshop');
else:
    // Se estamos na Internet, conecte-se com essas credenciais
    //    Preencha com as credenciais de acesso ao MySQL fornecidas
    //    ou configuradas no provedor de hospedagem.
    $conn = mysqli_connect('SERVIDOR', 'USUARIO', 'SENHA', 'BANCO DE DADOS');
endif;

// Testa conexão
if ($conn->connect_error) die("Falha na conexão com o MySQL: " . $conn->connect_error);

// MySQL em UTF-8 --> Corrige acentuação
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, "SET character_set_connection=utf8");
mysqli_query($conn, "SET character_set_client=utf8");
mysqli_query($conn, "SET character_set_results=utf8");

/////////////////////
// Funções do Site //
/////////////////////

// Função que monta cabeçalho do tamplate
function _header($title = '', $menu = 'home') {

    // Formata a tag <title>...</title>
    $titleTag = ($title == '') ? "Meu Site Novo" : "{$title} .::. Meu Site Novo";

    // Inicializa variáveis
    $nHome = $mArtigos = $mNoticias = $mContatos = $mSobre = $mProcurar = '';
    $active = ' class="active"';

    // Verifica qual menu deve estar ativo
    switch($menu):
        case 'home' : $nHome = $active; break;
        case 'artigos' : $mArtigos = $active; break;
        case 'noticias' : $mNoticias = $active; break;
        case 'contatos' : $mContatos = $active; break;
        case 'sobre' : $mSobre = $active; break;
        case 'procurar' : $mProcurar = $active; break;
    endswitch;

    // Formata saída e exibe
    echo <<<HEADER
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/global.css">
    <title>{$titleTag}</title>
</head>
<body>

<div id="wrap">

<header>
    <h1>Meu Site Novo</h1>
</header>
<nav>
    <a href="/"{$nHome}>Home</a>
    <a href="/artigos.php"{$mArtigos}>Artigos</a>
    <a href="/noticias.php"{$mNoticias}>Notícias</a>
    <a href="/contatos.php"{$mContatos}>Contatos</a>
    <div class="dropdown">
        <a href="#sobre"{$mSobre}>Sobre &dtrif;</a>
        <div class="droplinks">
            <a href="/sobre.php"{$mSobre}>Sobre o Site</a>
            <a href="/sobre.php"{$mSobre}>Sobre o Autor</a>
            <a href="/sobre.php"{$mSobre}>Sobre sua privacidade</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#procurar"{$mProcurar}>Procurar &dtrif;</a>
        <div class="droplinks">
            <form action="#action">
                <input type="search" name="q" id="q" placeholder="Procurar...">
                <button type="submit">&vrtri;</button>
            </form>
        </div>
    </div>
</nav>
<main>
HEADER;
}



// Função que monta rodapé do template
function _footer() {
    // Formata saída e exibe
    echo <<<FOOTER
</main>
<footer>&copy; Copyright 2019 André Luferat</footer>

</div>

<!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script -->
<!-- script src="/js/global.js"></script -->
</body>
</html>
FOOTER;
}



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



/*
	Função que obtém notícias do Google News.
	Para obter os links, leia o tutorial do Google News em
    https://support.google.com/news/publisher-center/answer/4203?hl=pt-BR
    
    Como usar:
        $ssunto = 'gatos';           // Procura notícias sobre este assunto
        $total = 5;                  // Total de blocos de notícias mostrados
        listaNews($assunto, $total); // Exibe as notícias encontradas
*/
function listaNews($assunto, $total = 10) {

    // Endereço do Feed RSS do Google News
    $feed = file_get_contents('https://news.google.com/_/rss/search?q='.$assunto.'&hl=pt-BR&gl=BR&ceid=BR%3Apt-419');

    // Processando XML do feed
    $rss = new SimpleXmlElement($feed);

    // Inicializa contador
    $i = 1;

    // Variável com View
    $out = "";

    // Varre os elementos do XML para formatá-los
    foreach($rss->channel->item as $feed) {
        $description = str_ireplace(array(' border="0" cellpadding="2" cellspacing="3"', ' border="1"', ' style="list-style: none; margin: 0; padding: 0;"'), '', $feed->description);
        $description = str_ireplace(array('<font color="#6f6f6f">', '</font>', '<strong><li>', '</li></strong>', '<ol>', '</ol>', '>Full coverage</a>', '<td><img', '</strong><h5>'), array('<span>', '</span>', '<li><strong>', '</strong></li>', '<ul>', '</ul>', ' class="full"><i class="far fa-newspaper fa-fw"></i> Cobertura completa</a>', '<td class="image d-none d-sm-table-cell"><img class="img-fluid rounded"', '</strong><br><br><h5>'), $description);
        
        // Alimenta o View
        $out .= "\n<div class=\"newsBox\"><h3>{$feed->title}</h3>{$description}</div>\n";
        
        // Contador de Views
        if($i > $total - 1) break;
        else $i++;
    }

    // Saída
    return $out;
}
?>