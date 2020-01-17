<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="recebe1.php" method="post">
    Nome produto<br>
    <input type="text" name="nome"
    placeholder="Digite o nome do produto"/>
    <br><br>
    Estoque<br>
    <input type="text" name="estoque"   placeholder="EX.: 100"/> 
    <br><br> 
    valor<br>
    <input type="text" name="valor"/>
    <br><br> 
    <select name="categoria">
        <option value="">Selecione--</option>
        <option value="Informatica">Informática</option>
        <option value="Eletrônico">Eletrônico</option>
        <option value="DVD">DVD</option>
        <option value="jogos">Jogos</option>
        <br><br>
        </select>
        <input type="submit" value="Enviar Dados"/>
        <input type="reset" value="Limpar Campos"/>
        </form>
</body>
</html>