<!doctype html>
<html lang="pt-br">
    <head>
        <title> Doceria </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <div id="principal">
        <header class="header-top">
            <nav class="header-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="paginas/contato.php">Contato</a></li>
                    <li><a href="paginas/quem-somos.php">Quem Somos?</a></li>
                    <li><a href="paginas/localizacao.php">Localização</a></li>
                </ul>
            </nav>
        </header>
        <img src="imagens/fundo-topo2.jpg" width="1024px" height="400" alt="Modelo femino comendo doce">

        <article class="portfolio">
            <h1>Doce Verão - Doces da Dona Rose</h1>
            <h3>Venha conhecer nossos produtos <br> Todos de origem caseira e com muita <span class="cor">Qualidade</span>!</h3>
        </article>

<?php
    include 'paginas/home.php';
?>
            
    <div id="contact">
        <address>
            Entre em Contato<br/>
            012-1234-4567<br/>
            <p>Cadastre para Mais informações <input type="email" name="email" class="email"/><input type="submit" value="Cadastrar" class="botao"/></p>
        </address>
    </div>

<?php
    include 'layout/rodape.php';
?>    