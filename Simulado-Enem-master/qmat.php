<?php
$mquestao1 = "<p><b>Quantos são e de que forma é definido o número de Deputados</b>
Calcula-se inicialmente o Quociente Populacional Nacional (QPN) mediante a divisão da população do país apurada no Censo 2010 pelo número de cadeiras de deputados federais; em seguida, divide-se a população de cada unidade da Federação pelo QPN, originando o Quociente Populacional Estadual (QPE)”. O cálculo mantém as regras constitucionais de limite máximo de 70 e mínimo de 8 por Estado.</b><br><br>
<img src='dados.png' style='float:;width: 500px; height: 400px;'><br><br>
A Mesa Diretora da Câmara dos Deputados é responsável pela direção dos trabalhos legislativos e dos serviços administrativos da Casa. Compõe-se de Presidente e dois Vice-Presidentes por quatro Secretários e quatro Suplentes.<br><br>

1) Cálculo do quociente eleitoral – Saiba como é realizado o cálculo do quociente eleitoral para distribuição de cadeiras pelo sistema de representação proporcional.<br><br>

1ª operação:<br>
Determinar o nº de votos válidos, deduzindo do comparecimento os votos nulos e os em branco (art. 106, § único do Código Eleitoral e art. 5º da Lei nº 9504 de 30/09/97).<br><br>

2ª operação:<br>
Determinar o quociente eleitoral, dividindo-se os votos válidos pelos lugares a preencher (art. 106 do Código Eleitoral). Despreza-se a fração, se igual ou inferior a 0,5, arredondando-a para 1 se superior.<br><br>

3ª operação:<br>
Determinar os quocientes partidários, dividindo-se a votação de cada partido (votos nominais + legenda) pelo quociente eleitoral (art. 107 do Código Eleitoral). Despreza-se a fração, qualquer que seja.<br><br>

Com base nas informações  acima analise a situação hipotética abaixo: Eleições 2014 para deputado federal no Rio de Janeiro.<br><br>

-Votos apurados : 10.000.000<br>
-Votos brancos : 500.000<br>
-Votos nulos : 300.000<br><br>

 Sabendo-se que o Patido  X, teve :<br>
-Voto nominal : 550.000<br>
-Voto na legenda : 50.000<br><br>

1ª) <b>Determine o coeficiente eleitoral e quantos deputados foram eleitos no Partido X pelo coeficiente eleitoral respectivamente</b><br><br>";
$mat1 ="<input type='radio' name='m_1' value='a'>a) 200.000 e 3<br></input>";
$mat2 ="<input type='radio' name='m_1' value='b'>b) 600.000 e 2<br></input>";
$mat3 ="<input type='radio' name='m_1' value='c'>c) 200.000 e 2<br></input>";
$mat4 ="<input type='radio' name='m_1' value='d'>d) 800.000 e 3<br></input>";
$mat5 ="<input type='radio' name='m_1' value='e'>e) 200.000 e 4<br><br><br></input>";
    ?>
<?php
$mquestao2 = "<hr><br><p><img src='quest2mat.png' style='float:;width: 500px; height: 200px;'><br><br>
2ª)<b> Sabendo que esse coração representa dois semicírculos com o diâmetro em dois lados consecutivos de um quadrado, cuja diagonal mede 5√8 cm, a área do coração, em cm quadrados, é: </b><br><br>
<p>";
$mate1 = "<input type='radio' name='n_1' value='a'>a) 175<br></input>";
$mate2 = "<input type='radio' name='n_1' value='b'>b) 160<br></input>";
$mate3 = "<input type='radio' name='n_1' value='c'>c) 155<br></input>";
$mate4 = "<input type='radio' name='n_1' value='d'>d) 140<br></input>";
$mate5 = "<input type='radio' name='n_1' value='e'>e) 142<br><br><br></input>";
  ?>
<?php
$mquestao3 = "<p><hr><br>A sombra de uma vareta enterrada no chão muda de comprimento conforme a hora do dia. Após o amanhecer e minutos antes do anoitecer são os momentos em que a sombra atinge o seu comprimento máximo. Ao meio-dia, a sombra praticamente desaparece, pois o sol fica numa posição vertical em relação à terra. <br><br>
3ª) <b>O gráfico que melhor representa o comprimento da sombra em função da hora do dia é:</b> 
 <p>";
$matem1 = "<input type='radio' name='o_1' value='a'>a) <img src='a.png' style='float:;width: 300px; height: 200px;'><br><br</input>";
$matem2 = "<input type='radio' name='o_1' value='b'>b) <img src='b.png' style='float:;width: 300px; height: 200px;'><br></input>";
$matem3 = "<input type='radio' name='o_1' value='c'>c) <img src='c.png' style='float:;width: 300px; height: 200px;'><br></input>";
$matem4 = "<input type='radio' name='o_1' value='d'>d) <img src='d.png' style='float:;width: 300px; height: 200px;'><br></input>";
$matem5 = "<input type='radio' name='o_1' value='e'>e) <img src='e.png' style='float:;width: 300px; height: 200px;'><br><br><br></input>";
  ?>
<?php
$mquestao4 = "<p>4ª)<b>(CEFET/RJ)</b> Sejam A, B e C respectivamente as medidas do complemento, suplemento e replemento do ângulo de 40º, têm-se <p><br>";
$matema1 = "<input type='radio' name='p_1' value='a'>a) A = 30º; B = 60º; C = 90º<br></input>";
$matema2 = "<input type='radio' name='p_1' value='b'>b) A = 30º; B = 45º; C = 60º<br></input>";
$matema3 = "<input type='radio' name='p_1' value='c'>c) A = 320º; B = 50º; C = 140º<br></input>";
$matema4 = "<input type='radio' name='p_1' value='d'>d) A = 50º; B = 140º; C = 320º<br></input>";
$matema5 = "<input type='radio' name='p_1' value='e'>e) A = 140º; B = 50º; C = 320º<br><br><br></input>";
  ?>

<?php
$q1=array($mat1, $mat2, $mat3, $mat4, $mat5);
echo $mquestao1;
foreach ($q1 as $res) {
  echo($res);
}

?>
<?php
$q2=array($mate1, $mate2, $mate3, $mate4, $mate5);
echo $mquestao2;
foreach ($q2 as $resp) {
  echo($resp);
}
?>
<?php
$q3=array($matem1, $matem2, $matem3, $matem4, $matem5);
echo $mquestao3;
foreach ($q3 as $respo) {
  echo($respo);
}
?>
<?php
$q4=array($matema1, $matema2, $matema3, $matema4, $matema5);
echo $mquestao4;
foreach ($q4 as $respos) {
  echo($respos);
}
?>