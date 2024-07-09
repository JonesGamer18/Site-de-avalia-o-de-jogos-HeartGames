<?php
$idUsuario=filter_input(INPUT_POST,'id_usuario');
$nome=filter_input(INPUT_POST,'login');
$senha=filter_input(INPUT_POST,'senha');

$nivelAcesso=filter_input(INPUT_POST,'nivel_acesso');
$conexao = mysqli_connect("localhost","root","","login",3306);
if($idUsuario == ''){
	

$sql="INSERT INTO usuario (login, senha, nivel_acesso) VALUES('$login','$senhaMD5',$nivelAcesso)";
}else{
	if($senha==""){
		
	$sql="UPDATE usuario SET login='$login', nivel_acesso=$nivelAcesso WHERE	 id_usuario=$idUsuario";
}else{
$sql="UPDATE usuario SET login='$login',senha='$senhaMD5', nivel_acesso=$nivelAcesso WHERE	 id_usuario=$idUsuario";
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