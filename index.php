<!doctype html>
<html lang="pt-br">
    <head>
        <title> Doceria </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            
    <article class="about">
        <address>
            <h3>Entre em Contato</h3>
            <h4>Fone: 021 18 99123 4567</h4>
            <p>Entregas de Segunda a Sábado, das 8:00 Horas ás 18:00 Horas.</p>
            <h5>Cadastre para Mais informações <input type="email" name="email" class="email"/> <button type="button" class="btn btn-success">Cadastrar</button></h5>
        </address>
    </article>

<?php
    include 'layout/rodape.php';
?>    