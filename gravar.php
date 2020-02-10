<head>
<link href="projeto.css" rel="stylesheet">
</head>
<?php
include_once'topo.php';
$nome=trim($_POST["nome"]);
$estoque=trim($_POST["estoque"]);
$valor=trim($_POST["valor"]);
$categoria=trim($_POST["categoria"]);
include_once 'conexao.php';
$sql="insert into produto values(null,'".$nome."','".$estoque."','".$valor."','".$categoria."')";
if (mysqli_query($con,$sql)){
    echo"Gravado com sucesso!";
} else {
    echo"Erro ao gravar.";
}
mysqli_close($con);
?>