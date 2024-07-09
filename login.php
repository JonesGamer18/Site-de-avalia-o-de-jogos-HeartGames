<?php
session_start();

$email=filter_input(INPUT_POST,'email');
$senha=filter_input(INPUT_POST,'senha');

$conexao=mysqli_connect("localhost","root","","tcc",3306);

$sql="SELECT * FROM usuario WHERE email='$email'";
$resultado=mysqli_query($conexao,$sql);

if($resultado != false ){
$usuario=mysqli_fetch_assoc($resultado);
	
	if($usuario != null){
		$senhaMD5=md5($senha);
		if($usuario['senha'] == $senhaMD5){
		$_SESSION['nome_usuario']=$usuario['nome_usuario'];
		$_SESSION['email']=$usuario['email'];
		$_SESSION['id_usuario']=$usuario['id_usuario'];
		$_SESSION['nivel_acesso']=$usuario['nivel_acesso'];
		if($usuario['nivel_acesso'] == 0){
        header("Location:index.php");	
		}else if($usuario['nivel_acesso'] == 1){
		header("Location: adm/index.php");
		}else{
			$_SESSION['mensagem'] = "Verifique seu acesso ao sistema!";
			header("Location:form-login.php");
		}
		}else{
			$_SESSION['mensagem']= "Senha incorreta!";
	header("Location: form-login.php");
		}	
}else{
	$_SESSION['mensagem']= "Usuário informado não existe!";
	header("Location: form-login.php");
}
}else{
	$_SESSION['erro']= mysqli_error($conexao);
	header("Location: form-login.php");
}
 echo "Bem vindo ao HeartGames!";
?>