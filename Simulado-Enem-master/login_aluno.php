<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"href="style.css">
    <title>Simulado Pré-ENEM</title>
    <script type="text/javascript">
function loginsucesso(){
  setTimeout("window.location='cadastro.php'", 5000);
}
function loginfalho(){
  setTimeout("window.location='Simulado Enem.php'", 5000);
}
      </script>
  </head>
  <body>
    <div id = "footer1"><h2>Simulado Pré-ENEM, Aqui Você Descobre Seu Desempenho Real</h2></div>
<div class="page-header">
      </div>
      <br><br>
     
<?php
$conexao = mysql_connect("localhost", "Eduardo", "ifal2015") or die(mysql_error());
$db_select=mysql_select_db("simulado_enem") or die(mysql_error());
?>
<?php
$nome_c=$_POST['nome_completo'];
$senha=$_POST['senha'];
$sql = "SELECT * from cadastro_aluno where nome_completo = '$nome_c' and senha = '$senha'" or die (mysql_error());
$result = mysql_query($sql);
$row = mysql_num_rows($result);
if ($row > 0) {
session_start();
$_SESSION['nome_completo'] = $_POST['nome_completo'];
$_SESSION['senha'] = $_POST['senha'];
echo "<center><b><h1>Login realizado com sucesso</h1></b></center>";
echo "<script>loginsucesso()</script>";
}else{
  echo "<center><b><h1>Erro no processo de login! Aguarde um instante, pois você será redirecionada para a página de login.</h1></b></center>";
  echo "<script>loginfalho()</script>";
}
?>
</body>
</html>