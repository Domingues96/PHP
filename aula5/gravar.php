<?php 

/* gravar os dados


	1 - resgatar os dados do formulario 
	2- MONTAR  O SQL para gravar os dados no banco
	3- abrir conexÃo com banco de dados
	4- gravar os dados no banco
	
	
	*/
	

// 1- resgatar os dados do formulario 
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$estado = $_POST["estado"];


//2 - montar o sql para gravar os dados no banco 
//insert into cliente values 
//(null, "adrielle","adri@hotmail.com",20,"solteira");

$sql = "insert into cliente values(null,'".$nome."','".$email."','".$idade."','".$estado."')";
//3 -abrir conexão com o banco de dados

//$con = myqli_connect(servidor,usuario,senha,banco);
$con = mysqli_connect("localhost","root","","aula5");

//4 - gravar os dados no banco
//mysqli_query grava numa conexão os dados
if(mysqli_query($con,$sql)) {
echo"cliente cadrastado com sucesso!";
}else{
echo"erro ao gravar";

}

?>