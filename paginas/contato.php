<?php
    include '../layout/cabecalho.php';
?>
<br/><br/>
<article class="about">
    <form method="GET" name="formulario" action="">
        <fieldset><legend><h3>C O N T A T O</h3></legend>
            <p>Nome: <input type="text" class="campo_nome" name="nome" placeholder="digite seu Nome aqui" /></p>
            <p>E-mail: <input type="e-mail" class="campo_email" name="email" placeholder="Digite seu e-mail" /></p>
            <p>Telefone: <input type="tel" name="telefone" placeholder="Digite seu Telefone" /></p>
            <p>Estado:
            <select name="select-estado">
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
                <option value="4">São Paulo</option>
                <option value="2">Sergipe</option>
                <option value="1">Tocantins</option>
                <option value="3">Distrito Federal</option>
            </select></p>
            <label>Comentário:</label><br><textarea class="msg" cols="35" rows="8"></textarea><br>
            <br/><input type="submit" value="Enviar"> 
        </fieldset>
    </form>
</article>

<?php
    include '../layout/rodape.php';
?>   

 