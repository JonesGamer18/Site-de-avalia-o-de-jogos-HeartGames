<?php
session_start();
$paginaCorrente=basename($_SERVER['SCRIPT_NAME']);
?>
<html>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<body>

      


<nav>
    <div  class=" blue nav-wrapper">
      <a href="index.php" class="brand-logo center"><img src="img/Logo site tcc.png" width="500" height="55"></a>
      <ul id="nav-mobile" class="hide-on-med-and-down" >
	   <li>Bem vindo <?php  if(isset($_SESSION['nome_usuario'])){echo $_SESSION['nome_usuario'];}?>!</h1>
	     
	     <li class="right" <?php  if($paginaCorrente=='index.php'){echo 'class="active"';}?>><a href="index.php">Home</a></li>
       <li class="right" <?php  if($paginaCorrente=='logoff.php'){echo 'class="active"';}?>><a href="logoff.php">Sair</a></li>
        <li class="right" <?php  if($paginaCorrente=='form-login.php'){echo 'class="active"';}?>><a href="form-login.php">Login</a></li>
      </ul>
    </div>
  </nav>
  </main>
  </html>
  </body>