<?php

$login = $_POST['login_user'];
$senha = $_POST['senha_user'];

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS1;ConnectionPooling=0","sa","root");

$stmt = $conn->query("SELECT count(*) as x FROM tb_usuarios where login='$login' and senha='$senha'");
$stmt->execute();
$results=$stmt->fetch(PDO::FETCH_ASSOC);

  if ($results['x'] == 1) 
  {
    echo "<h1>Bem-vindo, ".$login."!</h1>";
    echo "-------------------------------------<br>";
    echo "-------------------------------------<br>";
    echo "-------------------------------------<br>";
  }
  else
  {
    echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos ou não cadastrados');window.location.href='index.html';</script>";
    die();
  }
  echo "<br><a href='index.html'>SAIR</a>"
       
?>