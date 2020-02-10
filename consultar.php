<head>
<link href="projeto.css" rel="stylesheet">
</head>
<?php
include_once'topo.php';
?>
<script>
function excluir(id){
    if(confirm("DESEJA REALMENTE EXCLUIR ESTE ITEM?")){
        location.href='excluir.php?id='+id;
    }
}
</script>
<h3>Consulta de Produtos</h3>
<?php
$sql="select *from produto order by nome ASC";
include_once 'conexao.php';
$resultado = mysqli_query($con,$sql);
if (mysqli_num_rows($resultado) > 0){
?>

<table width="100%" border="1px">
<tr>
<th>Nome</th>
<th>Estoque</th>
<th>Valor</th>
<th>Categoria</th>
<th>Editar</th>
<th>Excluir</th>
</tr>
<?php 
while($linha = mysqli_fetch_array($resultado)){
?>

<tr>
<td><?php echo $linha["nome"];?></td>
<td><?php echo $linha["estoque"];?></td>
<td><?php echo $linha["valor"];?></td>
<td><?php echo $linha["categoria"];?></td>
<td><a href="editar.php?id=<?php echo $linha['idproduto'];?>">...</a></td>
<td><a href="#" onclick="excluir(<?php echo $linha['idproduto'];?>)">x</a></td>
</tr>

<?php } ?>
</table>
<?php 
} else {
    echo"Nenhum produto encontrado!";
}
?>