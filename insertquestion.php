<?php
$questao = $_POST['questao'];
$res1 = $_POST['res1'];$res2 = $_POST['res2'];$res3 = $_POST['res3'];$res4 = $_POST['res4'];$res5 = $_POST['res5'];
echo $questao."<br>".$res1."<br>".$res2."<br>".$res3."<br>".$res4."<br>".$res5;

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = " INSERT INTO questoes(pergunta, questao1, questao2, questao3, questao4, questao5)
 values('$questao', '$res1', '$res2', '$res3', '$res4', '$res5') ";

mysqli_query($link, $sql); ?>