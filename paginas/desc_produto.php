<?php 
    include '../layout/cabecalho.php';
?>

<?php
    error_reporting(1);
    include '../dados/dadosProduto.php';
    include '../function/function.php';
    $id=$_GET['id'];
?>

<section class="gallery">

    <div id="contact">
        <address>
            <h1><?= $arrayProdutos[$id]['nome']?></h1>
        </address>
    </div>

        <article class="gallery-card">
            <img src="<?= $arrayProdutos[$id]['img-caminho'] ?>"width="265" height="200" alt="<?= $arrayProdutos[$id]['nome']?>" />
        </article>

        <article class="gallery-card">
            <p class="gallery-title"><?= printProduto($arrayProdutos,$id);?></p>
            <p class="gallery-text">Compre por apenas: R$ <?= $arrayProdutos[$id]['preco']?></p>
            <button type="button" class="btn btn-outline-primary">Comprar</button>
        </article>
</section>
<?php
    include '../layout/rodape.php';
?>
 