<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"href="style.css">
    <title>Simulado Pré-ENEM</title>
  </head>
  <body>
    <div id = "footer1"><h3>Simulado Pré-ENEM, Aqui Você Descobre Seu Desempenho Real</h3></div>
<div class="page-header">
      </div>

      <br><br>
<center><div id = "section">
<form action="r_matematica.php" method ="post">
  <center><h2>Simulado de Matemática</h2></center>
<?php
include_once('qmat.php');
?>

<center>
<input type="submit" value="Ver resultado">;
</center>
</form>
</div>
</body>
</html>