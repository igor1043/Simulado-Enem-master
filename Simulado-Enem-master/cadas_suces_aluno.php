<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"href="style.css">
    <title>Simulado Pré-ENEM</title>
    <script type="text/javascript">
function cadastrosucesso(){
  setTimeout("window.location='login.php'", 5000);
}
    </script>
  </head>
  <body>
    <div id = "footer1"><h2>Simulado Pré-ENEM, Aqui Você Descobre Seu Desempenho Real</h2></div>
<?php
$conexao = mysql_connect("localhost", "Eduardo", "ifal2015") or die(mysql_error());
$db_select=mysql_select_db("simulado_enem") or die(mysql_error());
?>
<?php
$nome=$_POST['n_completo'];
$n_escolar=$_POST['n_escolar'];
$idade=$_POST['idade'];
$cpf=$_POST['cpf'];
$turma=$_POST['turma'];
$turno=$_POST['turno'];
$telefone=$_POST['telefone'];
$senha=$_POST['senha'];
$sql = "INSERT INTO cadastro_aluno (nome_completo, nível_escolar, idade, cpf, turma, turno, telefone, senha) VALUES ('$nome','$n_escolar','$idade','$cpf','$turma','$turno','$telefone','$senha')";
mysql_query($sql , $conexao);
  echo "<center><b><h1>Parabéns, inscrição realizada com sucesso</h1></b></center>";
  echo "<script>cadastrosucesso()</script>";
?>
</body>
</html>