<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"href="style.css">
    <title>Simulado Pré-ENEM</title>
    <script type="text/javascript">
function cadastrosucesso(){
  setTimeout("window.location='Simulado Enem.php'", 5000);
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
$nome_prof=$_POST['n_comp_prof'];
$nome_instituicao=$_POST['n_comp_instituicao'];
$graduacao=$_POST['graduacao'];
$ano_formacao=$_POST['ano_forma'];
$idade_professor=$_POST['idade_prof'];
$cpf_prof=$_POST['cpf_prof'];
$turno_lecio=$_POST['turno_leciona'];
$materia_lecio=$_POST['materia_leciona'];
$telefone=$_POST['telefone_prof'];
$senha=$_POST['senha_prof'];
$sql = "INSERT INTO cadastro_professor (nome_completo, instituicao, graduacao, ano_formacao, idade, cpf, turno_leciona, materia_leciona, telefone, senha) VALUES ('$nome_prof','$nome_instituicao','$graduacao','$ano_formacao','$idade_professor','$cpf_prof','$turno_lecio','$materia_lecio','$telefone','$senha')";
mysql_query($sql , $conexao);
  echo "<center><b><h1>Parabéns, inscrição realizada com sucesso</h1></b></center>";
  echo "<script>cadastrosucesso()</script>";
?>
</body>
</html>