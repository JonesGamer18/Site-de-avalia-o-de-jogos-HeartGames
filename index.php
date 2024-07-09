<?php
include_once('header.php');
$conexao = mysqli_connect("localhost","root","","tcc",3306);
?>
<html>
<body>
<head>
<title>HeartGames</title>
<style type="text/css">
	
	main {
    min-height: calc(100vh - 120px); 
}
 </style>
</head>
 <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/guardioes-da-galaxia.jpg"> 
        <div class="caption center-align">
          <h3>Eles estão voltando no mundo dos games EM BREVE!</h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="img/Pokemon-unite.jpg"> 
        <div class="caption left-align">
          <h3>Falta pouco! Pokemon UNITE chega para Android e IOS em 22 de Setrmbro de 2021</h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="img/mario.jpg">
        <div class="caption right-align">
          <h3>Esta pronto para a festa? Mario Party Superstars lança em 29 Outubro de 2021 exclxivamente para Nintendo Switch</h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="img/smash.jpg"> 
        <div class="caption center-align">
          <h3>O que você esta achando de Super Smash Bros Ultimate, Pode avalia-lo no nosso site  e rocomeda-lo para outros jogadores </h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
    <li>
         
        <div class="caption center-align">
          <h3>Ainda não possui cadastro no HeartGames, Crie seu cadastro e avalie seus jogos favoritos para outros jogadores possam conhecer esses títulos </h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
       <li>
        <img src="img/sonic mania.jpg"> 
        <div class="caption center-align">
          <h3>O que você esta de Sonic Mania, Pode avalia-lo no nosso site  e rocomeda-lo para outros jogadores </h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
	</ul>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $('.slider').slider();
  });
  </script>
  
 <div class="row">
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/minecraft.jpg">
          <span class="card-title">Jogos de Sobrevivência</span>
        </div>
       
        <div class="card-action">
          <a href="categorias/sobrevivencia.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/sonic-racer.jpeg">
          <span class="card-title">Jogos de Corrida</span>
        </div>
        <div class="card-action">
          <a href="categorias/corrida.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/lol.jpg">
          <span class="card-title">Jogos MOBAS</span>
        </div>
        <div class="card-action">
          <a href="categorias/moba.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  </div>
  
 <div class="row">
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/resident-evil.png">
          <span class="card-title">Jogos de Terror</span>
        </div>
       
        <div class="card-action">
          <a href="categorias/terror.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/Super-Mario-Bros.jpg">
          <span class="card-title">Jogos de Plataforma</span>
        </div>
        <div class="card-action">
          <a href="categorias/plataforma.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/Street-fighter.jpg">
          <span class="card-title">Jogos de Luta</span>
        </div>
        <div class="card-action">
          <a href="categorias/luta.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  </div>
  
  
 <div class="row">
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/zelda.png">
          <span class="card-title">Jogos de RPG</span>
        </div>
       
        <div class="card-action">
          <a href="categorias/rpg.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/God-of-War.jpg">
          <span class="card-title">Jogos de Ação</span>
        </div>
        <div class="card-action">
          <a href="categorias/acao.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  
    <div class="col s12 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/south.jpg">
          <span class="card-title">Jogos +18</span>
        </div>
        <div class="card-action">
          <a href="categorias/+18.php">Navegar nessa categoria</a>
        </div>
      </div>
    </div>
  </div>
<?php
include_once('footer.php');
?>
</body>
</html>