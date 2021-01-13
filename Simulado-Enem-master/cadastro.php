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
      <br><br><br><br><br><br><br><br>
      </div>
      <center><div id = "section">
     Parabéns senhor(a) <?php echo htmlspecialchars($_POST['n_completo']); ?> da Escola <?php echo htmlspecialchars($_POST['instituicao']); ?> 
     Pertence ao nível escolar <?php echo htmlspecialchars($_POST['n_escolar']); ?> e <?php echo (int)$_POST['idade']; ?> de idade, Sua Inscrição foi Realizada com sucesso!!
        <center>´<p>Simulado</p><br>
          <a href="matematica.php"><img src="Experimento_red_transparente.png" style="float:;width: 100px; height: 70px;"></a>
          <a href="linguagem.php"><img src="dicionario.png" style="float:;width: 100px; height: 70px;"> </a>
          <a href="natureza.php"><img src="noticia_353778_img1_sustentabilidade.png" style="float:;width: 100px; height: 70px;"></a>
          <a href="humanas.php"><img src="HUMANAS.png" style="float:;width: 100px; height: 70px;"></a>

          <input type="submit" value="Sair" onclick="login.php">
      </div></center>
<body>
</html>