<?php
$nome = $_POST['nome'];
$senha = MD5($_POST['senha']);
$email =($_POST['email']);
$conexao=mysqli_connect("localhost","root","","tcc",3306);
$select= "SELECT * FROM usuario WHERE nome_usuario = '$nome'";
$resultado = mysqli_query($conexao,$select);
$usuario=mysqli_fetch_assoc($resultado);
$logarray = $usuario['nome'];

 if($nome == "" || $nome == null){

      echo"<script language='javascript' type='text/javascript'>alert('O campo nome de usuario deve ser preenchido');window.location.href='cadastro.php';</script>";

    }else{

      if($logarray == $nome){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";

        die();

 

      }else{

        $insert = "INSERT INTO usuario (nome_usuario,senha,email) VALUES ('$nome','$senha','$email')";

        $result = mysqli_query($conexao,$insert);

        if($resultado){

          echo"<script language='javascript' type='text/javascript'>alert('Cadastro bem sussedido');window.location.href='login.php';</script>";


        }else{

                  echo"<script language='javascript' type='text/javascript'>alert('Problemas no seu cadastro');window.location.href='cadastro.php';</script>";


        }

      }

	}
	
?>