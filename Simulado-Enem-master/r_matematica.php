/*
* Author:  Igor Vinicius Freitas de Souza
* GitHub: https://github.com/igor1043
* E-mail: igorviniciusfreitasouza@gmail.com
*/
<!DOCTYPE html>
<html>
    <link rel="stylesheet"href="style.css">
  <head>
    <meta charset="utf-8">
    <title>Simulado Pré-ENEM</title>
  </head>
  <body>
    <div id = "footer1"><h3>Simulado Pré-ENEM, Aqui Você Descobre Seu Desempenho Real</h3></div>
<div class="page-header">
      </div>
      <center><div id = "section">
      <?php
      $pontos=0;
		  	if( $_POST['m_1'] === 'a' ){ 
          echo "Questão 1 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;

		  	}else{
          echo "Questão 1 resultado:  Resposta Errada :( <br> Alternativa correta -> 200.000 e 3<br><br>
            <img src='Resultado1.png' style='float:;width: 500px; height: 300px;'><br><br>";
        }
		  ?>
      <?php
        if( $_POST['n_1'] === 'a' ){
          echo "Questão 2 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 2 resultado: Resposta Errada :( <br> Alternativa correta -> 175<br>
                <br> <img src='Resultado2.1.png' style='float:;width: 500px; height: 300px;'><br><img src='Resultado2.2.png' style='float:;width: 500px; height: 300px;'><br><br>";
        }
      ?>
      <?php
        if( $_POST['o_1'] === 'd' ){
          echo "Questão 3 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 3 resultado: Resposta Errada :( <br> Alternativa correta -> d)<br><img src='d.png' style='float:;width: 300px; height: 200px;'><br><br>
          O gráfico da letra D é o único a mostrar a sombra quase mínima ao meio-dia, sendo que no ínicio do amanhecer e logo antes de anoitecer, a sombra atinge a maior altura.";
        }
      ?>
      <?php
        if( $_POST['p_1'] === 'd' ){
          echo "Questão 4 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 4 resultado: Resposta Errada :( <br> Alternativa correta -> A = 50º; B = 140º; C = 320º<br><br>
          Podemos observar facilmente que o complemento será calculado por 90º - 40º = 50º, o suplemento por 180º - 40º = 140º e finalmente o replemento por 360º - 40º = 320º.";
        }
      ?>
      <?php
      echo "<br><br><b><center>Pontuação de 1000: $pontos Parabéns!</center></b> ";
      ?>
      <br><br>
     
     <center><p>Simulado</p><br>
          <a href="linguagem.php"><img src="dicionario.png" style="float:;width: 100px; height: 70px;"> </a>
          <a href="natureza.php"><img src="noticia_353778_img1_sustentabilidade.png" style="float:;width: 100px; height: 70px;"></a>
          <a href="humanas.php"><img src="HUMANAS.png" style="float:;width: 100px; height: 70px;"></a>
      </div></center>
      <left><a href="cadastro.php"><img src="voltar.png" style="float:;width: 100px; height: 100px;"></a></left> 
</div>
</body>
</html>
