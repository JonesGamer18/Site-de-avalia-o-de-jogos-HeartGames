<?php
include_once('headerADM.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['nivel_acesso'])){
if ($_SESSION['nivel_acesso'] != 1){
	$_SESSION['mensagem'] ="Você não possui acesso a esta página!";
	header("Location: ../index.php");
}
}else{
	$_SESSION['mensagem'] ="Você não possui acesso a esta página!";
	header("Location:../index.php");
}
$conexao = mysqli_connect("localhost","root","","tcc",3306);
$idUsuario= filter_input(INPUT_GET,'id_usuario');

$excluir=filter_input(INPUT_GET,'excluir');
if($excluir==null){
$sql="SELECT * FROM usuario WHERE id_usuario=$idUsuario";
$resultado= mysqli_query($conexao,$sql);
if($resultado == false){
	$_SESSION['erro'] =mysqli_error($conexao);
	header("Location:usuarios.php");
}
$usuario=mysqli_fetch_assoc($resultado);
}else if($excluir==true){
	$sql="DELETE FROM usuario WHERE id_usuario=$idUsuario";
	$resultado= mysqli_query($conexao,$sql);
if($resultado == false){
	$_SESSION['erro'] =mysqli_error($conexao);
	header("Location:usuarios.php");
}else{
	$_SESSION['mensagem']="Usuário excluido com sucesso!";
}
header("Location:usuarios.php");
}else{
	header("Location:usuarios.php");
	
}

?>
<html>
<head>

<title>Exclusão de Usuário</title>

</head>
<body>
<h1>Tem certeza que deseja excluir o usuário <?=$usuario['nome_usuario']?>?</h1>

<a href="excluir-usuarios.php?id_usuario=<?=$usuario['id_usuario']?>&excluir=true">Sim</a> <a href="usuarios.php">Não</a>
</body>
</html>