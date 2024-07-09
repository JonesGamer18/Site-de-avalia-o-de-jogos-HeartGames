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
header("Location: ../index.php");
}
if(isset($_GET['id_usuario'])){
$idUsuario=filter_input(INPUT_GET,'id_usuario');
$conexao=mysqli_connect("localhost","root","","tcc",3306);
$sql= "SELECT * FROM usuario WHERE id_usuario=$idUsuario";
$resultado=mysqli_query($conexao,$sql);
if($resultado == false){
	$_SESSION['erro']= mysqli_error($conexao);
	header("Location:usuarios.php");
}
$usuario=mysqli_fetch_assoc($resultado);
if($usuario== null){
$_SESSION['mensagem']="Usuário não existe!";
header("Location:usuarios.php");
}
}
?>
<html>
<head>

<title>Formulário Usuário</title>

</head>
<body>
<a href="index.php">Voltar</a><br><br>
<form action="salvar-usuario.php" method="POST">
 <input type="hidden" name="id_usuario" value="<?=isset($usuario) ? $usuario['id_usuario'] : '' ?>">
Nome de Usuario <input type="text" name="nome_usuario" value="<?=isset($usuario) ? $usuario['nome_usuario'] : '' ?>"required><br>
email <input type="email" name="email" value="<?=isset($usuario) ? $usuario['email'] : '' ?>"required><br>
Senha <input type="password" name="senha" <?=isset($usuario) ? '' : 'required' ?>><br>
NIvel de Acesso <input type="number" name="nivel_acesso" value="<?= isset($usuario) ? $usuario['nivel_acesso'] : '' ?>"required><br>
<input class="blue btn" type="submit"></input><br>

</form>
<?php
include_once('footerADM.php');
?>
</body>
</html>