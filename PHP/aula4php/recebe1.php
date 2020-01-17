<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Resgate de dados ->Método POST</H1>
<?php
// receber os dados vindo do formulário 
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    $estoque = $_POST["estoque"];
    $categoria = $_POST["categoria"];


    if($nome == "" || $valor == "" || $estoque == ""|| $categoria == ""){
        echo "prencha os campos !";
    }else if(!is_numeric($valor) || !is_numeric($estoque))
    {    
    echo "estoque ou valor invalidado!";
    }else{

        echo"<h3>dados enviados</h3>";
        echo"nome :".$nome;
        echo"<br>valor :".number_format"($valor,2",",".");
        echo"<br>estoque :".$estoque;
        echo"<br>categoria :".categoria;
    }
?>   
</body>
</html>



