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
            <h1>New Fashion Everything Never Enough</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat nisi non ante dictum congue. Cras id, posuere velit sed, lacinia mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vehicula, ipsum vel congue cursus, mi neque tincidunt enim, egestas porttitor felis neque et risus. Maecenas fringilla hendrerit enim malesuada laoreet. Aenean quis tortor a odio tempus tincidunt. Vivamus rutrum nulla sed metus congue bibendum. Sed ut aliquam purus. Donec odio mauris, commodo sed dignissim vitae, dapibus eget mauris.</p>
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