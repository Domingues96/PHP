<?php
//1. pegar os dados para atualizar
$id = $_POST["id"];
$nome = $_POST["nome"];
$estoque = $_POST["estoque"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];
//2. abrir conexao com o banco
include_once'conexao.php';
//3. criar a instrução sql para atualizar
$sql = "UPDATE produto set nome = '".$nome."',estoque = '".$estoque."', valor= '".$valor."',categoria = '".$categoria."' where idproduto =".$id;
//4. executar a instrução do banco
if (mysqli_query($con,$sql)){
    $msg = "Produto atualizado com sucesso!";
} else {
    $msg = "Erro ao atualizar produto.";
}
mysqli_close($con);

echo"<script>
alert('".$msg."');
location.href='consultar.php';
</script>";
?>