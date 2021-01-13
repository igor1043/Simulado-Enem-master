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
		  	if( $_POST['i_1'] === 'b' ){ 
          echo "Questão 1 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;

		  	}else{
          echo "Questão 1 resultado:  Resposta Errada :( <br> Alternativa correta -> Vaidade, já que não conseguia parar de se admirar.<br><br>";
        }
		  ?>
      <?php
        if( $_POST['j_1'] === 'c' ){
          echo "Questão 2 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 2 resultado: Resposta Errada :( <br> Alternativa correta -> Retratar uma mulher que apresenta comportamentos diferentes dos tradicionais quando fora das vistas do pai.<br>
                <br> Pelos trechos 'Ele nem imagina o que a filha é capaz' e 'Perto de papai, você é santinha/Quando o sogrão não tá, você perde a linha', é possível perceber que a personagem feminina se comporta de forma diferente da tradicional, quando não está com o pai.<br><br>";
        }
      ?>
      <?php
        if( $_POST['k_1'] === 'c' ){
          echo "Questão 3 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 3 resultado: Resposta Errada :( <br> Alternativa correta -> denunciar o real.<br><br>
          Trata-se de uma metáfora, em que a lâmpada ganha significado de conhecimento. É preciso ter conhecimento para enxergar as situações com mais clareza e, assim, poder denunciar o que não está correto por meio da literatura e dos textos de modo geral.";
        }
      ?>
      <?php
        if( $_POST['l_1'] === 'd' ){
          echo "Questão 4 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 4 resultado: Resposta Errada :( <br> Alternativa correta -> metonímia<br><br>
          “Nossa vida” representa pessoas, no caso os espectadores que se calam para ouvir os atores. Há também a ideia de que os atores representam personagens que por sua vez representam os espectadores que assistem aos filmes. Cada personagem representa inumeráveis espectadores, cumprindo uma função metonímica, isto é, pela parte (o personagem) representa-se o todo (todos os espectadores).";
        }
      ?>
      <?php
      echo "<br><br><b><center>Pontuação de 1000: $pontos Parabéns!</center></b> ";
      ?>
      <br><br>
     <center><p>Simulado</p><br>
          <a href="matematica.php"><img src="Experimento_red_transparente.png" style="float:;width: 100px; height: 70px;"></a>
          <a href="natureza.php"><img src="noticia_353778_img1_sustentabilidade.png" style="float:;width: 100px; height: 70px;"></a>
          <a href="humanas.php"><img src="HUMANAS.png" style="float:;width: 100px; height: 70px;"></a>
      </div></center>
      <left><a href="cadastro.php"><img src="voltar.png" style="float:;width: 100px; height: 100px;"></a></left> 
</div>
</body>
</html>