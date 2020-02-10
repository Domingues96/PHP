<head>
<link href="projeto.css" rel="stylesheet">
</head>
<?php
//pegar o id
$id = $_GET["id"];
//abrir conexão com banco de dados
include_once'conexao.php';
$sql = "delete from produto where idproduto =".$id;
//igual ao gravar
if (mysqli_query($con,$sql)){
    $msg = "Produto excluído com sucesso!";
} else {
    $msg = "Erro ao deletar produto.";
}
mysqli_close($con);

echo"<script>
alert('".$msg."');
location.href='consultar.php';
</script>";
?>