<?php
session_start();
$paginaCorrente=basename($_SERVER['SCRIPT_NAME']);
?>
<html>
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>


<body>

      
<script>$(".dropdown-button").dropdown();</script>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="usuarios.php">Gerenciar usuários cadastrados</a></li>
  <li><a href="cadastro-jogos.php">Cadastrar Jogos</a></li>
   <li><a href="index.php">Tela inicial do ADM</a></li>
</ul>
<nav>

    <div  class=" blue nav-wrapper">
      <a href="index.php" class="brand-logo center"><img src="img/Logo site tcc.png" width="500" height="55"></a>
      <ul id="nav-mobile" class="hide-on-med-and-down" >
	   <li>Bem vindo <?php  if(isset($_SESSION['nome_usuario'])){echo $_SESSION['nome_usuario'];}?>!</h1>
	      <li class="right dropdown-button" href="#!" data-activates="dropdown1" data-beloworigin="true" <?php  if($paginaCorrente=='index.php'){echo 'class="active"';}?>><a href="index.php">Central ADM <i class="material-icons right">arrow_drop_down</i></a></li></a></li>
	     <li class="right" <?php  if($paginaCorrente=='index.php'){echo 'class="active"';}?>><a href="../index.php">Home</a></li>
       <li class="right" <?php  if($paginaCorrente=='logoff.php'){echo 'class="active"';}?>><a href="../logoff.php">Sair</a></li>
        <li class="right" <?php  if($paginaCorrente=='form-login.php'){echo 'class="active"';}?>><a href="../form-login.php">Login</a></li>
	  </ul>
    </div>
  </nav>
  </main>
  </html>
  </body>