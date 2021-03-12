/*
* Author:  Igor Vinicius Freitas de Souza
* GitHub: https://github.com/igor1043
* E-mail: igorviniciusfreitasouza@gmail.com
*/
<?php
$hquestao1 = "<p>1ª) Período histórico referente ao processo de bipolarização mundial marcado <br>pela 
            formação de dois blocos distintos( um capitalista e outro socialista):<p>";
$alt1 ="<input type='radio' name='a_1' value='a'>a) I Guerra Mundial<br></input>";
$alt2 ="<input type='radio' name='a_1' value='b'>b) II Guerra Mundial<br></input>";
$alt3 ="<input type='radio' name='a_1' value='c'>c) Corrida Espacial<br></input>";
$alt4 ="<input type='radio' name='a_1' value='d'>d) Guerra Fria<br></input>";
$alt5 ="<input type='radio' name='a_1' value='e'>e) Nenhuma das alternativas<br><br><br></input>";
    ?>
<?php
$hquestao2 = "<p>2ª) Formado por 3 estados, vive sob o clima subtropical. De qual região do Brasil estamos falando?<p>";
$alte1 = "<input type='radio' name='b_1' value='a'>a) Sudeste<br></input>";
$alte2 = "<input type='radio' name='b_1' value='b'>b) Sul<br></input>";
$alte3 = "<input type='radio' name='b_1' value='c'>c) Nordeste<br></input>";
$alte4 = "<input type='radio' name='b_1' value='d'>d) Norte<br></input>";
$alte5 = "<input type='radio' name='b_1' value='e'>e) Centro Oeste<br><br><br></input>";
  ?>
<?php
$hquestao3 = "<p>3ª) Sobre a Mata dos Cocais, podemos afirmar que:<p>";
$alter1 = "<input type='radio' name='c_1' value='a'>a) Localiza-se na região litorânea do Nordeste.<br></input>";
$alter2 = "<input type='radio' name='c_1' value='b'>b) Concentra a presença do babaçu e da carnaúba.<br></input>";
$alter3 = "<input type='radio' name='c_1' value='c'>c) Encontra-se em 95% da vegetação preservada.<br></input>";
$alter4 = "<input type='radio' name='c_1' value='d'>d) É aciculifoliada, aberta e homogênia.<br></input>";
$alter5 = "<input type='radio' name='c_1' value='e'>e) Nenhuma das alternativas<br><br><br></input>";
  ?>
<?php
$hquestao4 = "<p>4ª) Qual filósofo escreveu o texto sobre a alegoria da caverna?<p>";
$altern1 = "<input type='radio' name='d_1' value='a'>a) Descartes<br></input>";
$altern2 = "<input type='radio' name='d_1' value='b'>b) Hegel<br></input>";
$altern3 = "<input type='radio' name='d_1' value='c'>c) Patão<br></input>";
$altern4 = "<input type='radio' name='d_1' value='d'>d) Locke<br></input>";
$altern5 = "<input type='radio' name='d_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
  ?>

<?php
$q1=array($alt1, $alt2, $alt3, $alt4, $alt5);
echo $hquestao1;
foreach ($q1 as $res) {
  echo($res);
}

?>
<?php
$q2=array($alte1, $alte2, $alte3, $alte4, $alte5);
echo $hquestao2;
foreach ($q2 as $resp) {
  echo($resp);
}
?>
<?php
$q3=array($alter1, $alter2, $alter3, $alter4, $alter5);
echo $hquestao3;
foreach ($q3 as $respo) {
  echo($respo);
}
?>
<?php
$q4=array($altern1, $altern2, $altern3, $altern4, $altern5);
echo $hquestao4;
foreach ($q4 as $respos) {
  echo($respos);
}
?>
