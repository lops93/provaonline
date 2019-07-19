<?php
$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = ("SELECT * FROM questoes ORDER BY id ") or die("erro");
$resultado_id = mysqli_query($link, $sql);

if($resultado_id) {
    $idquest = 0;
    while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
        $id = $registro['id'];
        $questao = nl2br($registro['pergunta']);
        $r1 = $registro['questao1'];
        $r2 = $registro['questao2'];
        $r3 = $registro['questao3'];
        $r4 = $registro['questao4'];
        $r5 = $registro['questao5'];
        $questaocerta = $registro['questaocerta'];?>
<form action=" " method="post">
    <?php echo $id.") ".($questao); ?><br><br>

    <?php
    $questaorand = array($r1, $r2, $r3, $r4, $r5);
    shuffle($questaorand);

    $letras = array("A", "B", "C", "D", "E");
    foreach (array_combine($questaorand, $letras) as $quest => $letra){  ?>

        <div class="custom-control custom-radio">
            <input type="radio" id="<?php echo $idquest?>" name="res" class="custom-control-input" value="<?php echo $quest ?>">
            <label class="custom-control-label" for="<?php echo $idquest?>">(<?php echo $letra?>)<?php echo $quest ?></label>
        </div><br>
        <?php $idquest ++;
    }
    ?>


    <input type="submit" name="submit" class="btn btn-dark">
    <br>
    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['res'])) {
            // echo "You have selected :" . $_POST['res'];  //  Displaying Selected Value
            if ($_POST['res'] == $questaocerta){
                echo "voce selecionou a questão certa";
            }
            else{
                echo "voce errou, <br>a resposta é ".$questaocerta;
            }
        }
    }
    ?>

</form>


<?php
    }


}



?>

<script>
    jQuery(document).ready(function($) {
        $('pre').each(function(index, el){
            $(this).text( $(this).html() );
        });
    });
</script>