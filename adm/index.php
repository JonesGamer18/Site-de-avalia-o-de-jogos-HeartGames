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
<head> <style type="text/css">
	
	main {
    min-height: calc(100vh - 120px); 
}
 </style>
 

<title>Área Administrativa</title>

</head>
<body>
<main>
<h1>Central do ADM,
esta área é somenete para os administradores do sistema 
 </h1>
</main>
  <?php
include_once('footerADM.php');

?>          
</body>
</html>