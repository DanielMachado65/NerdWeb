<!DOCTYPE html>
<!--[if lte IE 7]><link href="ie7-fail.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<!--[if lt IE 8]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
<!--[if lt IE 9]><script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script> <![endif]-->
<!--[if lt IE 9]><script> document.createElement('header');document.createElement('nav');document.createElement('div');document.createElement('article');document.createElement('aside');document.createElement('footer');document.createElement('background-image')</script><![endif]-->
<!--Inicio do Head-->
<?php

require "funcoes.php";
$error = false;
$success = false;
$titulo = $texto = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["titulo"]) && isset($_POST["texto"]) && !empty($_POST["texto"]) && !empty($_POST["titulo"])) {

      $titulo = verifica_campo($_POST["titulo"]);
      $texto = verifica_campo($_POST["texto"]);

      if(insereNoticia($titulo, $texto)){
        $success = true;
      } else {
        $error = true;
      }
    }
    else {
      $error_msg = "Por favor, preencha todos os dados corretamente.";
      $error = true;
    }
}
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Inicio Titulo-->
  <title>Josemar Perussolo - Adicionar Notícias</title>
  <!-- Ininio Das Meta Tags -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="REVISIT-AFTER" content="1 DAYS">
  <meta name="dcterms.audience" content="GLOBAL">
  <meta name="AUTHOR" content="Nerdweb">
  <meta name="dcterms.rightsHolder" content="Copyright (c) Nerdweb">
  <meta name="dc.language" content="pt-br">
  <meta name="RATING" content="GENERAL">
  <meta name="Robots" content="INDEX,FOLLOW">
  <meta name="format-detection" content="telephone=no">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!-- Facebook
    <meta property="og:title" content="Nome da Página">
    <meta property="og:site_name" content="Nome Da Empresa">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.nomedaempresa.com/link-da-pagina">
    <meta property="og:description" content="Descrição para divulgação da página, ela deve conter no máximo 608 caracteres!">
    <meta property="og:image" content="http://www.meusite.com.br/imagem.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!--Inicio fontes-->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <!--Inicio icon-->
  <link rel="shortcut icon" href="favicon.ico?v=2" type="image/x-icon">
  <!--Inicio CSS Stylesheets-->
  <link rel="stylesheet" type="text/css" href="css/css_reset_nerdweb.css">
  <link rel="stylesheet" type="text/css" href="css/css_content.css">
  <link rel="stylesheet" type="text/css" href="css/css_header.css">
  <link rel="stylesheet" type="text/css" href="css/css_footer.css">
  <link rel="stylesheet" type="text/css" href="css/css_noticias.css">
  <!--Inicio Scripts-->
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</head>
<!-- Inicio do Body -->

<body>
  <div id="fb-root"></div>
  <!-- Inicio do Header -->
  <div id="wrap">
    <header class="header-style">
      <div class="header-box">
        <div class="logo">
          <a href="index.php"><img src="img/elements/josemar-perussolo-logo.png" alt=""></a>
        </div>
        <nav class="menu" id="nav">
          <input type="checkbox" id="button" style="display: none;">
          <label for="button" onclick>Menu</label>
          <ul>
            <li><a href="index.php">NOTÍCIAS</a></li>
          </ul>
          <ul>
            <li><a class="ativ">ADICIONAR</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!--Inicio do Content-->
    <section class="content-style">
<?php

  if ($success) {
  echo <<< EOT
  <div class="alert alert-success" role="alert">
    Foi cadastrado com sucesso
  </div>
EOT;
  } elseif ($error) {
    echo <<< EOT
    <div class="alert alert-danger" role="alert">
       $error_msg
    </div>
EOT;
}

?>
      <div class="content-box">
        <div class="banner">
          <div class="banner-box">
            <div class="banner-content">
              <img src="img/elements/josemar-perussolo-banner-titulos.jpg" alt="">
              <div class="title-box">
                <div class="title">
                  <h1><span>ADICIONAR NOTÍCIA</span></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="news">
          <div class="news-box">
            <div class="news-content">
              <form method="POST">
                <p><strong>Título</strong></p>
                <p><input type="text" name="titulo"></p>
                <hr>
                <p><strong>Texto</strong></p>
                <p><textarea name="texto"></textarea></p>
                <hr>
                <button type="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--Inicio do Footer-->
  <footer class="footer-style">
    <div class="footer-box">
      <nav class="ft-menu"></nav>
      <div class="ft-copyright">
        <h1>&copy; 2015 Josemar Perussolo, todos os direitos reservados. Desenvolvido por <a href="http://nerdweb.com.br" target="_blank">NERDWEB</a></h1>
      </div>
    </div>
  </footer>
</body>

</html>
