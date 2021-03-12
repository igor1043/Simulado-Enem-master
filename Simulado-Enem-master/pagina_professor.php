/*
* Author:  Igor Vinicius Freitas de Souza
* GitHub: https://github.com/igor1043
* E-mail: igorviniciusfreitasouza@gmail.com
*/
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"href="style.css">
    <title>Simulado Pré-ENEM</title>
  </head>
  <body>
    <div id = "footer"><h2>Simulado Pré-ENEM, Aqui Você Descobre Seu Desempenho Real</h2></div><br>
<div id = "footer1">
  <center><b><h3>Página do Professor</h3></b></center>
  <input type="submit" value="Lista de Alunos Cadastrados">
  <input type="submit" value="Remover Alunos">
  <input type="submit" value="Adicionar Alunos">
  <input type="submit" value="Adicionar Questões">
  <input type="submit" value="Ajuda">
  <input type="submit" value="Sair">
</div><br><br>
<?php
$conexao = mysql_connect("localhost", "Eduardo", "ifal2015") or die(mysql_error());
$db_select=mysql_select_db("simulado_enem") or die(mysql_error());
?>
<?php
$nome_p = $_POST['nome_completo'];
$sql = "SELECT * FROM cadastro_professor where nome_Completo = '$nome_p'" or die (mysql_error());
$result=mysql_query($sql, $conexao);
$row=mysql_num_rows($result);
?>
<center><div id="section">
<h3>Sejá bem vindo Professor '$row'!<br>Neste sistema você tem a possibilidade de realizar desde a inclusão de alunos a turma, a 
adicionar questões para os mesmos responderem logo após as aulas!</h3>
</div></center><br><br>
<div id = "footer1"><h2>Simulado Pré-ENEM, Aqui Você Descobre Seu Desempenho Real</h2></div>
</body>
</html>
