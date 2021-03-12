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
    <div id = "footer1"><h3>Simulado Pré-ENEM, Aqui Você Descobre Seu Desempenho Real</h3></div>
<div class="page-header">
      </div>
      <center><div id = "section">
      <?php
      $pontos=0;
		  	if( $_POST['e_1'] === 'a' ){ 
          echo "Questão 1 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
		  	}else{
          echo "Questão 1 resultado:  Resposta Errada :( <br> Alternativa correta -> Pães e Bolos<br><br>";
          echo "<br><img src='fermentacao_latica.jpg' style='float:;width: 500px; height: 400px;'><br><br>";
        }
		  ?>
      <?php
        if( $_POST['f_1'] === 'a' ){
          echo "Questão 2 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 2 resultado: Resposta Errada :( <br> Alternativa correta -> Artérias pulmonares<br><br>
          <img src='539597b590bc6-sistema-cardiovascular-large.jpg' style='float:;width: 500px; height: 400px;'><br><br1>";
        }
      ?>
      <?php
        if( $_POST['g_1'] === 'a' ){
          echo "Questão 3 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 3 resultado: Resposta Errada :( <br> Alternativa correta -> Chuva Ácida<br><br>
          <img src='slide_7.jpg' style='float:;width: 500px; height: 400px;'><br><br>";
        }
      ?>
      <?php
        if( $_POST['h_1'] === 'c' ){
          echo "Questão 4 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 4 resultado: Resposta Errada :( <br> Alternativa correta -> Fotossíntese<br><br><img src='fotossintese.jpg' style='float:;width: 500px; height: 400px;'><br><br>";
        }
      ?>
      <?php
      echo "<br><br><b><center>Pontuação de 1000: $pontos Parabéns!</center></b> ";
      ?>
      <br><br>
     <center><p>Simulado</p><br>
          <a href="linguagem.php"><img src="dicionario.png" style="float:;width: 100px; height: 70px;"> </a>
          <a href="matematica.php"><img src="Experimento_red_transparente.png" style="float:;width: 100px; height: 70px;"></a>
          <a href="humanas.php"><img src="HUMANAS.png" style="float:;width: 100px; height: 70px;"></a>
      </div></center>
      <left><a href="cadastro.php"><img src="voltar.png" style="float:;width: 100px; height: 100px;"></a></left> 
</div>
</body>
</html>
