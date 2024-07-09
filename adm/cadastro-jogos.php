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
if(isset($_GET['id_jogo'])){
$idJogo=filter_input(INPUT_GET,'id_jogo');
$conexao=mysqli_connect("localhost","root","","tcc",3306);
$sql= "SELECT * FROM jogos WHERE id_jogo=$idJogo";
$resultado=mysqli_query($conexao,$sql);
if($resultado == false){
	$_SESSION['erro']= mysqli_error($conexao);
	header("Location:index.php");
}
$jogo=mysqli_fetch_assoc($resultado);
if($jogo== null){
$_SESSION['mensagem']="Esse jogo não existe!";
header("Location:cadastro-jogos.php");
}
}
?>
<html>
<head>


<title>Formulário de Cadastro de Jogos</title>

</head>
<body>

<a href="index.php">Voltar</a><br><br>
<form method="POST" action="salvar-jogos.php"  class="col sl2 l6 offset-l3">
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
<div class="card">
<div class="card-content">
<div class="input-field">
<input type="hidden"  name="id_jogo" value="<?=isset($jogo) ? $jogo['id_jogo'] : '' ?>">
</div>
<div class="input-field">
<input type="text" id="nome" name="nome" value="<?=isset($jogo) ? $jogo['nome'] : '' ?>"required>
<label  for="nome"> Nome do jogo</label>
</div>
<div class="input-field">
<input type="text" id="plataforma" name="plataforma" value="<?=isset($jogo) ? $jogo['plataforma'] : '' ?>"required>
<label  for="plataforma"> Plataforma</label>
</div>
<div class="input-field">
<input type="date" id="data_lanca" name="data_lanca" value="<?=isset($jogo) ? $jogo['data_lancamento'] : '' ?>"required>

</div>
<div class="input-field">
<input type="text" id="cat" name="cat" value="<?=isset($jogo) ? $jogo['categoria'] : '' ?>"required>
<label  for="nome"> Categoria</label>
</div>
</div>
<div class="input-field">
<input type="text" id="trailer" name="trailer" value="<?=isset($jogo) ? $jogo['link_trailer'] : '' ?>"required>
<label  for="nome"> Trailer do Jogo</label>
</div>

<div class="file-field input-field">
      <div class="btn">
        <span>Cadastrar uma imagem</span>
        <input type="file" name="midia1" value="<?=isset($jogo) ? $jogo['midia1'] : '' ?>"required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

<div class="file-field input-field">
      <div class="btn">
        <span>Cadastrar segunda imagem</span>
        <input type="file" name="midia2" value="<?=isset($jogo) ? $jogo['midia2'] : '' ?>"required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

 <div class="file-field input-field">
      <div class="btn">
        <span>Cadastrar capa do jogo</span>
        <input type="file" name="capa" value="<?=isset($jogo) ? $jogo['imagem'] : '' ?>"required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

<input class="blue btn" type="submit" value="Cadastrar Jogo"></input><br>
</div>
</div>
</form>
<?php
include_once('footerADM.php');
?>
</body>
</html>