<!doctype html>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html;
	charset=uff-8">
	<title> cadrasto de cliente</title>
	
	</head>
	<body>
	<h3> sistema de clientes</h3>
	<form action = "gravar.php" method="post">
	nome..:
	<br>
	<input type="text" name = "nome"/>
<br><br>
E-mail..:
<br>
	<input type="text" name = "email"/>
	<br><br>
	idade:
	<br>
<input type="text" name = "idade"/>
<br><br>
estado civil. :
<select name="estado">
<option value = "">selecione --<option>
<option value = "solteiro">solteiro<option>
<option value = "casado">casado</option>
<option value = "viuvo">viuvo</option>
<option value = "divorciado">divorciado</option>
</select>
<br><br>
<input type="submit" value="cadastrar cliente">	
<input type="reset" value="limpar campos">
	
	</body>
</form> 	
</html>