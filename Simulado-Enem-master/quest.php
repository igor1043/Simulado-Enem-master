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
$hquestao3 = "<p>3ª) Sobre a Mata dos Pinhais, podemos afirmar que:<p>";
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
$hquestao5 = "<p>5ª) A fermentação tem sido praticada comercialmente para a obtenção de varios produtos. Considera-se que a fermentação láctica produza:<p>";
$nat1 = "<input type='radio' name='e_1' value='a'>a) Pães e Bolos<br></input>";
$nat2 = "<input type='radio' name='e_1' value='b'>b) queijos e Iogurtes<br></input>";
$nat3 = "<input type='radio' name='e_1' value='c'>c) Vinagre<br></input>";
$nat4 = "<input type='radio' name='e_1' value='d'>d) Cervejas e Vinhos<br></input>";
$nat5 = "<input type='radio' name='e_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
  ?>
<?php
$hquestao6 = "<p>6ª) No corpo humano, a circulação do sangue venoso que sai do coração dirigindo-se para os pulmões e feita pelas:<p>";
$natu1 = "<input type='radio' name='f_1' value='a'>a) Artérias pulmonares.<br></input>";
$natu2 = "<input type='radio' name='f_1' value='b'>b) Arteríolas<br></input>";
$natu3 = "<input type='radio' name='f_1' value='c'>c) Artérias da Aorta.<br></input>";
$natu4 = "<input type='radio' name='f_1' value='d'>d) Veias Cavas.<br></input>";
$natu5 = "<input type='radio' name='f_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
  ?>
<?php
$hquestao7 = "<p>7ª) Por não conter enxofre em sua composição, o biodiesel apresenta uma vantagem em relação ao óleo diesel por diminuir as consequências:</p>";
$natur1 = "<input type='radio' name='g_1' value='a'>a) Da Chuva Ácida.<br></input>";
$natur2 = "<input type='radio' name='g_1' value='b'>b) Do Efeito Estufa<br></input>";
$natur3 = "<input type='radio' name='g_1' value='c'>c) Das ilhas de calor<br></input>";
$natur4 = "<input type='radio' name='g_1' value='d'>d) Da inversão térmica<br></input>";
$natur5 = "<input type='radio' name='g_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
  ?>
<?php
$hquestao8 = "<p>8ª) Considera-se como exemplo de nutrição autótrofa a capacidade de realizar a:<p>";
$nature1 = "<input type='radio' name='h_1' value='a'>a) Fermentação Lática<br></input>";
$nature2 = "<input type='radio' name='h_1' value='b'>b) Respiração Anaeróbia<br></input>";
$nature3 = "<input type='radio' name='h_1' value='c'>c) Fotossíntese<br></input>";
$nature4 = "<input type='radio' name='h_1' value='d'>d) Respiracao Aerobia<br></input>";
$nature5 = "<input type='radio' name='h_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
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
<?php
$q5=array( $nat1, $nat2, $nat3, $nat4, $nat5);
echo $hquestao5;
foreach ($q5 as $respost) {
  echo($respost);
}
?>
<?php
$q6=array($natu1, $natu2, $natu3, $natu4, $natu5);
echo $hquestao6;
foreach ($q6 as $resposta) {
  echo($resposta);
}
?>
<?php
$q7=array($natur1, $natur2, $natur3, $natur4, $natur5);
echo $hquestao7;
foreach ($q7 as $respostas) {
  echo($respostas);
}
?>
<?php
$q8=array($altern1, $altern2, $altern3, $altern4, $altern5);
echo $hquestao4;
foreach ($q4 as $respos) {
  echo($respos);
}
?>