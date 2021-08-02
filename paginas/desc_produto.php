<?php 
    include '../layout/cabecalho.php';
?>

<?php
    error_reporting(1);
    include 'dadosProduto.php';
    include 'function.php';
    $id=$_GET['id'];
?>

<section class="gallery">

    <div id="contact">
        <address>
            <h1><?= $arrayProdutos[$id]['nome']?></h1>
        </address>
    </div>

        <article class="gallery-card">
        <!--<a href="#" target="_blank">
            <img src="imagens/bolo-tradicional.jpg" width="250" height="190" alt="bolo de chocolate">
        </a>-->
        <img src="<?= $arrayProdutos[$id]['img-caminho'] ?>"width="265" height="200" alt="<?= $arrayProdutos[$id]['nome']?>" />
        </article>

        <article class="gallery-card">
            <p class="gallery-title"><?php printProduto($arrayProdutos,$id);?></p>
            <p class="gallery-text">Compre por apenas: R$ <?= $arrayProdutos[$id]['preco']?></p>
            <p><input type="submit" value="COMPRAR" /></p>
        </article>
</section>
<?php
    include '../layout/rodape.php';
?>
 