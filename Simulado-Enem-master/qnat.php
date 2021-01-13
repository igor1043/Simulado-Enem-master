<?php
$nquestao1 = "<p>1ª) A fermentação tem sido praticada comercialmente para a obtenção de varios produtos. Considera-se que a fermentação láctica produza:<p>";
$nat1 = "<input type='radio' name='e_1' value='a'>a) Pães e Bolos<br></input>";
$nat2 = "<input type='radio' name='e_1' value='b'>b) queijos e Iogurtes<br></input>";
$nat3 = "<input type='radio' name='e_1' value='c'>c) Vinagre<br></input>";
$nat4 = "<input type='radio' name='e_1' value='d'>d) Cervejas e Vinhos<br></input>";
$nat5 = "<input type='radio' name='e_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
  ?>
<?php
$nquestao2 = "<p>2ª) No corpo humano, a circulação do sangue venoso que sai do coração dirigindo-se para os pulmões e feita pelas:<p>";
$natu1 = "<input type='radio' name='f_1' value='a'>a) Artérias pulmonares.<br></input>";
$natu2 = "<input type='radio' name='f_1' value='b'>b) Arteríolas<br></input>";
$natu3 = "<input type='radio' name='f_1' value='c'>c) Artérias da Aorta.<br></input>";
$natu4 = "<input type='radio' name='f_1' value='d'>d) Veias Cavas.<br></input>";
$natu5 = "<input type='radio' name='f_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
  ?>
<?php
$nquestao3 = "<p>3ª) Por não conter enxofre em sua composição, o biodiesel apresenta uma vantagem em relação ao óleo diesel por diminuir as consequências:</p>";
$natur1 = "<input type='radio' name='g_1' value='a'>a) Da Chuva Ácida.<br></input>";
$natur2 = "<input type='radio' name='g_1' value='b'>b) Do Efeito Estufa<br></input>";
$natur3 = "<input type='radio' name='g_1' value='c'>c) Das ilhas de calor<br></input>";
$natur4 = "<input type='radio' name='g_1' value='d'>d) Da inversão térmica<br></input>";
$natur5 = "<input type='radio' name='g_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
  ?>
<?php
$nquestao4 = "<p>4ª) Considera-se como exemplo de nutrição autótrofa a capacidade de realizar a:<p>";
$nature1 = "<input type='radio' name='h_1' value='a'>a) Fermentação Lática<br></input>";
$nature2 = "<input type='radio' name='h_1' value='b'>b) Respiração Anaeróbia<br></input>";
$nature3 = "<input type='radio' name='h_1' value='c'>c) Fotossíntese<br></input>";
$nature4 = "<input type='radio' name='h_1' value='d'>d) Respiracao Aerobia<br></input>";
$nature5 = "<input type='radio' name='h_1' value='e'>e) Nenhuma das alternativas.<br><br><br></input>";
  ?>
<?php
$q5=array( $nat1, $nat2, $nat3, $nat4, $nat5);
echo $nquestao1;
foreach ($q5 as $respost) {
  echo($respost);
}
?>
<?php
$q6=array($natu1, $natu2, $natu3, $natu4, $natu5);
echo $nquestao2;
foreach ($q6 as $resposta) {
  echo($resposta);
}
?>
<?php
$q7=array($natur1, $natur2, $natur3, $natur4, $natur5);
echo $nquestao3;
foreach ($q7 as $respostas) {
  echo($respostas);
}
?>
<?php
$q8=array($nature1, $nature2, $nature3, $nature4, $nature5);
echo $nquestao4;
foreach ($q8 as $respostas1) {
  echo($respostas1);
}
?>