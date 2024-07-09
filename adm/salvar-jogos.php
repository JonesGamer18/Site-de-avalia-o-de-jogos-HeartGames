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
$midia1=filter_input(INPUT_POST,'midia1');
$midia2=filter_input(INPUT_POST,'midia2');
$idJogo=filter_input(INPUT_POST,'id_jogo');
$nomeJogo=filter_input(INPUT_POST,'nome');
$trailer=filter_input(INPUT_POST,'trailer');
$plataforma=filter_input(INPUT_POST,'plataforma');
$capa=filter_input(INPUT_POST,'capa');
$categoria=filter_input(INPUT_POST,'cat');
$dataLanca=filter_input(INPUT_POST,'data_lanca');
$conexao = mysqli_connect("localhost","root","","tcc",3306);
if($idJogo== ''){
	

$sql="INSERT INTO jogos (nome,imagem,plataforma,data_lancamento,categoria,link_trailer,midia1,midia2) VALUES('$nomeJogo','$capa','$plataforma','$dataLanca','$categoria','$trailer','$midia1','$midia2')";
}else{
$sql="UPDATE jogos SET nome='$nomeJogo',imagem='$capa', plataforma='$plataforma',data_lancamento='$dataLanca', categoria='$categoria', link_trailer='$trailer', midia1='$midia1', midia2='$midia2' WHERE	 id_jogo=$idJogo";
}


$resultado=mysqli_query($conexao,$sql);

if($resultado== true){
	echo"<script language='javascript' type='text/javascript'>alert('Jogo cadastrado com sucesso');window.location.href='salvar-jogos.php';</script>";
}else{
	echo"<script language='javascript' type='text/javascript'>alert('Problemas ao salvar o jogo');window.location.href='salvar-jogos.php';</script>";
}



?>