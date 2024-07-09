<?php
include_once('header.php');
$conexao = mysqli_connect("localhost","root","","tcc",3306);
	$idJogo=$_GET['id_jogo'];
$sql="SELECT * FROM jogos WHERE id_jogo='$idJogo'";
$resultado=mysqli_query($conexao,$sql);
?>
<html>
<head>
<title>Tela de Avaliação</title>
<style type="text/css">
	
	main {
    min-height: calc(100vh - 120px); 
}
 </style>
</head>
<body>
<main class="container">
<?php
	while($jogo=mysqli_fetch_assoc($resultado)){
?>
<h1>Jogo <?=$jogo['nome'] ?></h1>

<img   src="categorias/img/<?=$jogo['imagem']?>" style="width:15%">
<br>Plataformas:<?=$jogo['plataforma'] ?><br>



<br><iframe width="600" height="350" src="<?=$jogo['link_trailer']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</main>

	<?php
	}
	?>
	<?php
	include_once('footer.php');
	?>

</body>
 
</html>