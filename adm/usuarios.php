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
$conexao = mysqli_connect("localhost","root","","tcc",3306);
$sql="SELECT * FROM usuario";
$resultado=mysqli_query($conexao,$sql);
?>
<html>
<head>

<title>Gerenciamento de usuários</title>

</head>
<body>

<style>
table,
th,
td{
padding: 10px;
border: none;
border-collapse:collapse;
}
</style>
</head>
<body>
<?php
if(isset($_SESSION['erro'])){
$erro=$_SESSION['erro'];
echo $erro."<br>";
unset($_SESSION['erro']);
}
if(isset($_SESSION['mensagem'])){
$mensagem=$_SESSION['mensagem'];
echo $mensagem;
unset($_SESSION['mensagem']);
}
?>

<h3>Usuários</h3>
<a href="form-usuario.php">Cadastrar Usuário</a>
<br><br>
<table class="container  bordered  highlight">
    <tr>
	<th>ID</th>
    <th>Nome de Usuario</th>
	 <th>Nível Acesso</th>
	  <th colspan="2">Opções</th>
	</tr>
	<?php
	while($usuario=mysqli_fetch_assoc($resultado)){
	?>
	
	<tr>
	<td><?=$usuario['id_usuario'] ?></td>
	<td><?=$usuario['nome_usuario'] ?></td>
     <td><?=$usuario['nivel_acesso'] ?></td>
     <td><a href="form-usuario.php?id_usuario=<?=$usuario['id_usuario'] ?>">Alterar</a></td>
	 <td><a href="excluir-usuarios.php?id_usuario=<?=$usuario['id_usuario'] ?>">Excluir</a></td>
	</tr>
	<?php
	}
	?>
	</table>

  <?php
include_once('footerADM.php');

?>          