<head>
<link href="projeto.css" rel="stylesheet">
</head>
<?php 
include_once 'topo.php';
?>
<?php
//pegar o id que o consultar está mandando
$id = $_GET["id"];
$sql = "select *from produto where idproduto =".$id;
include_once 'conexao.php';
$resultado = mysqli_query($con,$sql);
if(mysqli_num_rows($resultado)==1){
    $reg = mysqli_fetch_array($resultado);
}
?>
    <h3>Atualizar Produto</h3>
    <form action="atualiza.php" method="post">
    Nome:
    <input type="text" name="nome" value="<?php echo $reg["nome"];?>"><br>
    Estoque:
    <input type="text" name="estoque" value="<?php echo $reg["estoque"];?>"><br>
    Valor:
    <input type="text" name="valor" value="<?php echo $reg["valor"];?>"><br>
    Categoria:
    <select name="categoria">
    <option value="<?php echo $reg["categoria"]; ?>"><?php echo $reg["categoria"]; ?></option>
        <option value="eletronico"> Eletronico</option>
        <option value="roupas"> Roupas</option>
        <option value="dvd"> DVD</option>
        </select>
        <input type="submit" value="ATUALIZAR PRODUTO">
        <input type="hidden" name="id" value="<?php echo $reg["idproduto"]; ?>">
    </form>
<?php
include_once 'rodape.php';
?>
