<!doctype html>
<html lang="pt-br">
    <?php
        if(!isset($index)){
            $index = 0;
        }
    ?>
    <head>
        <title> Doceria </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="
        <?=
            $index == 1 ? "css/style.css" : "../css/style.css";
        ?>
        
        
        ">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div id="principal">
            
            <header class="header-top">
                <nav class="header-nav">
                    <ul>
                        <li><a href="<?= $index == 1 ? "": "../"; ?>index.php">Home</a></li>
                        <li><a href="<?= $index == 1 ? "paginas/":"" ?>contato.php">Contato</a></li>
                        <li><a href="<?= $index == 1 ? "paginas/":"" ?>quem-somos.php">Quem Somos?</a></li>
                        <li><a href="<?= $index == 1 ? "paginas/":"" ?>localizacao.php">Localização</a></li>
                    </ul>
                </nav>
            </header>
            <img src="<?= $index == 1 ? "":"../" ?>imagens/fundo-topo2.jpg" width="1024px" height="400" alt="Modelo femino comendo doce">
 