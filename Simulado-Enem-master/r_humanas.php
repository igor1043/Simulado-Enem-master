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
		  	if( $_POST['a_1'] === 'd' ){ 
          echo "Questão 1 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
		  	}else{
          echo "Questão 1 resultado:  Resposta Errada :( <br> Alternativa correta -> Guerra Fria<br><br>";
          echo "<justify>A Guerra Fria foi uma disputa pela superioridade mundial entre Estados Unidos e União Soviética
                após a Segunda Guerra Mundial (1939-1945). É chamada de Guerra Fria por ser uma intensa guerra econômica,
                diplomática e ideológica travada pela conquista de zonas de influência. 

                A disputa dividiu o mundo em blocos de influência das duas superpotências e provocou uma corrida armamentista
                que se estendeu por 40 anos. Com sistemas econômicos e políticos diferentes, EUA e URSS colocam o mundo sob a 
                ameaça de uma guerra nuclear, criando armas com potência suficiente para explodir o planeta inteiro. Os EUA assumiram
                a liderança do chamado mundo capitalista livre, e a URSS, do mundo comunista.</justify> 
                <br><br><img src='curiosidade-sobre-os-estados-unidos-2.jpg' style='float:;width: 500px; height: 400px;'><br><br>";
        }
		  ?>
      <?php
        if( $_POST['b_1'] === 'b' ){
          echo "Questão 2 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 2 resultado: Questão 2 resultado: Resposta Errada :( <br> Alternativa correta -> Sul<br><br>
          <img src='mapa-basil-regiao-sul[1].gif' style='float:;width: 500px; height: 400px;'><br><br1>";
        }
      ?>
      <?php
        if( $_POST['c_1'] === 'b' ){
          echo "Questão 3 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 3 resultado: Resposta Errada :( <br> Alternativa correta -> Concentra a presença do babaçu e da carnaúba<br><br>
          <img src='db5856338747a236b2c83cda4796a9d0.jpg' style='float:;width: 500px; height: 400px;'><br><br>";
        }
      ?>
      <?php
        if( $_POST['d_1'] === 'c' ){
          echo "Questão 4 resultado: Parabéns questão correta<br><br>";
          $pontos=$pontos+250;
        }else{
          echo "Questão 4  resultado: Resposta Errada :( <br> Alternativa correta -> Platão<br><br>
          O mito fala sobre prisioneiros (desde o nascimento) que vivem presos em correntes numa caverna e que passam todo tempo
          olhando para a parede do fundo que é iluminada pela luz gerada por uma fogueira. Nesta parede são projetadas sombras de
          estátuas representando pessoas, animais, plantas e objetos, mostrando cenas e situações do dia-a-dia. Os prisioneiros 
          ficam dando nomes às imagens (sombras), analisando e julgando as situações.
 
          Vamos imaginar que um dos prisioneiros fosse forçado a sair das correntes para poder explorar o interior da caverna e o 
          mundo externo. Entraria em contato com a realidade e perceberia que passou a vida toda analisando e julgando apenas 
          imagens projetadas por estátuas. Ao sair da caverna e entrar em contato com o mundo real ficaria encantado com os seres 
          de verdade, com a natureza, com os animais e etc. Voltaria para a caverna para passar todo conhecimento adquirido fora da 
          caverna para seus colegas ainda presos. Porém, seria ridicularizado ao contar tudo o que viu e sentiu, pois seus colegas 
          só conseguem acreditar na realidade que enxergam na parede iluminada da caverna. Os prisioneiros vão o chamar de louco, 
          ameaçando-o de morte caso não pare de falar daquelas ideias consideradas absurdas.";
        }
      ?>
      <?php
      echo "<br><br><b><center>Pontuação de 1000: $pontos Parabéns!</center></b> ";
      ?>

      <br><br>
    <center><p>Simulado</p><br>
          <a href="linguagem.php"><img src="dicionario.png" style="float:;width: 100px; height: 70px;"> </a>
          <a href="natureza.php"><img src="noticia_353778_img1_sustentabilidade.png" style="float:;width: 100px; height: 70px;"></a>
          <a href="matematica.php"><img src="Experimento_red_transparente.png" style="float:;width: 100px; height: 70px;"></a>
      </div></center>
      <left><a href="cadastro.php"><img src="voltar.png" style="float:;width: 100px; height: 100px;"></a></left> 
</div>
</body>
</html>
