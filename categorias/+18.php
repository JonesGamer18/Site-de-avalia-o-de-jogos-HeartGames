<?php
include_once('headerCAT.php');
$conexao = mysqli_connect("localhost","root","","tcc",3306);
$sql="SELECT * FROM jogos WHERE categoria='+18'";
$resultado=mysqli_query($conexao,$sql);
?>
<html>
<head>

<title>Jogos +18</title>
<style type="text/css">
	
	main {
    min-height: calc(100vh - 120px); 
}
</style>
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

<h3>Jogos para +18</h3>
<table class="container  bordered  highlight">
    <tr>
	<th>Capa</th>
    <th>Nome do Jogo</th>
	 <th>Plataformas</th>
     	 <th>Data de lançamento</th>
	</tr>
	<?php
	while($jogo=mysqli_fetch_assoc($resultado)){
	?>
	
	<tr>
	<td><img src="img/<?=$jogo['imagem']?>" style="width:50%"></td>
	<td><?=$jogo['nome'] ?></td>
	<td><?=$jogo['plataforma'] ?></td>
     <td><?=$jogo['data_lancamento'] ?></td>
     <td><a href="../avaliacao.php?id_jogo=<?=$jogo['id_jogo'] ?>">Avaliar</a></td>
	</tr>
	<?php
	}
	?>
	</table>

  <?php
include_once('footerCAT.php');

?>          