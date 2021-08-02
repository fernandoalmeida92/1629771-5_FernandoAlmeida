<?php
    include '../layout/cabecalho.php';
?>
<br/><br/>
<article class="about">
    <form class="row g-3"><legend>C O N T A T O</legend>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Nome</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Digite seu nome aqui">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Digite seu E-mail aqui">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Endereço">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select">
            <option value="1">Acre</option>
                <option value="2">Alagoas</option>
                <option value="1">Amapá</option>
                <option value="1">Amazonas</option>
                <option value="2">Bahia</option>
                <option value="2">Ceará</option>
                <option value="4">Espirito Santo</option>
                <option value="3">Goiás</option>
                <option value="2">Maranhão</option>
                <option value="3">Mato Grosso</option>
                <option value="3">Mato Grosso do Sul</option>
                <option value="4">Minas Gerais</option>
                <option value="2">Paráiba</option>
                <option value="5">Paraná</option>
                <option value="2">Pernambuco</option>
                <option value="2">Piauí</option>
                <option value="4">Rio de Janeiro</option>
                <option value="2">Rio Grande do Norte</option>
                <option value="5">Rio Grande do Sul</option>
                <option value="1">Rondônia</option>
                <option value="1">Roraima</option>
                <option value="5">Santa Catarina</option>
                <option value="4" selected>São Paulo</option>
                <option value="2">Sergipe</option>
                <option value="1">Tocantins</option>
                <option value="3">Distrito Federal</option>
            </select>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Confirmo meus dados
            </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</article>

<?php
    include '../layout/rodape.php';
?>   

 