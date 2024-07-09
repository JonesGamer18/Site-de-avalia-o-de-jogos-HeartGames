<?php
session_start();
if(isset($_SESSION['nivel_acesso'])){
if ($_SESSION['nivel_acesso'] != 1){
	$_SESSION['mensagem'] ="Você não possui acesso a esta página!";
	header("Location: ../index.php");
}
}else{
	$_SESSION['mensagem'] ="Você não possui acesso a esta página!";
	header("Location: ../index.php");
}
$idUsuario=filter_input(INPUT_POST,'id_usuario');
$nomeU=filter_input(INPUT_POST,'nome_usuario');
$email=filter_input(INPUT_POST,'email');
$senha=filter_input(INPUT_POST,'senha');
$senhaMD5=md5($senha);
$nivelAcesso=filter_input(INPUT_POST,'nivel_acesso');
$conexao = mysqli_connect("localhost","root","","tcc",3306);
if($idUsuario == ''){
	

$sql="INSERT INTO usuario (nome_usuario, senha,email ,nivel_acesso) VALUES('$login','$senhaMD5',$email,$nivelAcesso)";
}else{
	if($senha==""){
		
	$sql="UPDATE usuario SET nome_usuario='$nomeU', nivel_acesso=$nivelAcesso WHERE	 id_usuario=$idUsuario";
}else{
$sql="UPDATE usuario SET nome_usuario='$nomeU',senha='$senhaMD5',email='$email', nivel_acesso=$nivelAcesso WHERE	 id_usuario=$idUsuario";
}
}

$resultado=mysqli_query($conexao,$sql);

if($resultado== true){
	$_SESSION['mensagem'] = "Usuário cadstrado com sucesso!";
     header("Location:usuarios.php");
}else{
	$_SESSION['erro'] = mysqli_error($conexao);
    header("Location:usuarios.php");
}


?>