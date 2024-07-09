<?php
include_once('header.php');

?>
<html>
<body>
<head>

<style>
    button{
		width:40px;
		display:flex;
		align-items:center;
		margin-left:500px;
		margin-top:-40px;
		border:none;
        background-color:transparent;
        transition:.2s;
        opacity:.5;		
	}
  </style>
<title>Cadastre-se </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#olho').click(function() {
    if ($('#senha').attr('type') == 'text') {
      $('#senha').attr('type', 'password');
    } else {
      $('#senha').attr('type', 'text');
    }
  });
});
</script>
</script>
</script>
</head>
  <main>
<h1 class="center-align">Cadastre-se</h1>
<div class="row">
<form method="POST" action="cadastrar.php" class="col sl2 l6 offset-l3">
<div class="card">
<div class="card-content">
<div class="input-field">
</div>
<div class="input-field">
<i class="material-icons prefix">person</i>
<input type="text" id="nome" name="nome">
<label  for="nome"> Nome de usuario</label>
</div>


 <div class="input-field">
<i class="material-icons prefix">email</i>
<input type="email" id="email" class="validate" name="email">
<label  for="email">E-mail</label>
</div>

<div class="input-field">
<i class="material-icons prefix">lock</i>
<input type="password" id="senha" name="senha">
<label  for="senha"> Senha</label>
<button type="button" id="olho"  ><img src="img/show.png"></button>
</div>


<label>
        <br><input type="checkbox"></input>
        <span>Gostaria de receber novidades por E-mail?</span>
      </label>
 
<br><br><input class="blue btn" type="submit"></input><br>
</div>
</div>
</form>
</main>
<?php
include_once('footer.php');

?>
            
</html>
</body>