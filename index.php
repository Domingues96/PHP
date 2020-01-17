<?php 
include_once'topo.php';
?>
    <h3>Novo Produto</h3>
    <form action="gravar.php" method="post">
    Nome:
    <input type="text" name="nome"/><br>
    Estoque:
    <input type="text" name="estoque"/><br>
    Valor:
    <input type="text" name="valor"/><br>
    Categoria:
    <select name="categoria">
        <option value="eletronico"> Eletronico</option>
        <option value="roupas"> Roupas</option>
        <option value="dvd"> DVD</option>
        </select>
        <input type="submit" value="NOVO PRODUTO">
    </form>
<?php
include_once'rodape.php';
?>
