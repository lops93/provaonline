<?php include('db.php') ?>
<?php include ('page/header.html') ?>

<?php
$questao = $_POST['questao'];
$res1 = $_POST['res1'];$res2 = $_POST['res2'];$res3 = $_POST['res3'];$res4 = $_POST['res4'];$res5 = $_POST['res5'];
$questaocerta = $_POST['questaocerta'];
$categoria = $_POST['categoria'];
//echo $questao."<br>".$res1."<br>".$res2."<br>".$res3."<br>".$res4."<br>".$res5;

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = " INSERT INTO questoes(pergunta, questao1, questao2, questao3, questao4, questao5, categoria, questaocerta)
 values('$questao', '$res1', '$res2', '$res3', '$res4', '$res5', '$categoria', '$questaocerta') ";

//executar a query
if(mysqli_query($link, $sql)){?>
    <div class="modal fade text-center py-5" style="top:30px" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <h3 class="pt-5 mb-0 text-secondary">

                        Questão inserida com sucesso!</h3>
                    <p class="pb-3 text-muted"><small>Volte para a página anterior para conferir a questão</small></p>
                    <a role="button" class="btn btn-primary" href="index.html">Voltar</a>
                </div>
            </div>
        </div>
    </div>

<?php
} else {
    echo 'Erro ao registrar a questão!';
} ?>
<script type="text/javascript">
    $('#thanksModal').on('hide.bs.modal', function () {
        window.location.href = 'index.html';

    })

</script>


<script type="text/javascript">
    $(window).on('load', function() {
        $('#thanksModal').modal('show');
    });
    $(function() {
        $("#search").addClass("d-none");
    });
    $(".toggle-search").click(function() {
        $("#search").removeClass("d-none");
        $("#search").addClass("d-block slideDown");
        $(".navbar").removeClass("d-flex slideDown");
        $(".navbar").addClass("d-none");
    });
    $(".hide-search").click(function() {
        $("#search").removeClass("d-block slideDown");
        $(".navbar").addClass("d-flex slideDown");
        $("#search").addClass("d-none");
    });
</script>
</body>
</html>
