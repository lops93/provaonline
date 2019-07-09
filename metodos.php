<?php
$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = ("SELECT * FROM questoes ") or die("erro");
$resultado_id = mysqli_query($link, $sql);

if($resultado_id) {

    while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
        $id = $registro['id'];
        $questao = nl2br($registro['pergunta']);
        $r1 = $registro['questao1'];
        $r2 = $registro['questao2'];
        $r3 = $registro['questao3'];
        $r4 = $registro['questao4'];
        $r5 = $registro['questao5'];
        $questaocerta = $registro['questaocerta'];

    }

}


?>