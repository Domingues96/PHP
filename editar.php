<?php 
include_once'topo.php';
?>
    <h3>Atualizar Produto</h3>
    <form action="" method="post">
    Nome:
    <input type="text" name="nome"/><br>
    Estoque:
    <input type="text" name="estoque"/><br>
    Valor:
    <input type="text" name="valor"/><br>
    Categoria:
    <select name="categoria">
        <option value="eletronico"> Eletrônico</option>
        <option value="roupas"> Roupas</option>
        <option value="dvd"> DVD</option>
        </select>
        <input type="submit" value="ATUALIZAR PRODUTO">
    </form>
<?php
include_once'rodape.php';
?>
