<?php
include_once("header.php")
?>
<html>
<body>
<head>
<title>Tela de login HeartGames </title>
</head>
  <main>
  
<h1 class="center-align">Entrar</h1>
<div class="row">

<form method="POST" action="login.php"  class="col sl2 l6 offset-l3">
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
<i class="material-icons prefix">person</i>
<input type="text" id="email" name="email">
<label  for="email"> insira seu email para realizar o login</label>
</div>


<div class="input-field">
<i class="material-icons prefix">lock</i>
<input type="password" id="senha" name="senha">
<label  for="senha"> Senha</label>
</div>

<input class="blue btn" type="submit" value="Login"></input><br>
<br><a href="cadastro.php">Cadastre-se</a></br>
<br><a href="cadastro.php">Esqueceu a senha</a><br>
</div>
</div>
</form>
</div>
</main>
  <?php
include_once('footer.php');

?>          
</html>
</body>
