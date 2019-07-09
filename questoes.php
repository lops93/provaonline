<?php include('db.php') ?>
<?php include ('page/header.html') ?>
<?php include ('metodos.php') ?>
<body>
<?php include ('page/menu.php') ?>



<div class="container">
    <div class="row">
       <a href="inserirquestao.php"><button class="btn btn-dark" style="margin-top: 10px">Adicionar questão</button></a>
    </div>
    <div class="row">
        <div class="col">
            <form action=" " method="post">
       <?php echo $id.") ".$questao; ?><br><br>
                <div class="custom-control custom-radio">
                    <input type="radio" id="r1" name="res" class="custom-control-input" value="<?php echo $r1 ?>">
                    <label class="custom-control-label" for="r1"><?php echo $r1 ?></label>
                </div><br>
                <div class="custom-control custom-radio">
                    <input type="radio" id="r2" name="res" class="custom-control-input" value="<?php echo $r2 ?>">
                    <label class="custom-control-label" for="r2"><?php echo $r2 ?></label>
                </div><br>
                <div class="custom-control custom-radio">
                    <input type="radio" id="r3" name="res" class="custom-control-input" value="<?php echo $r3 ?>">
                    <label class="custom-control-label" for="r3"><?php echo $r3 ?></label>
                </div><br>
                <div class="custom-control custom-radio">
                    <input type="radio" id="r4" name="res" class="custom-control-input" value="<?php echo $r4 ?>">
                    <label class="custom-control-label" for="r4"><?php echo $r4 ?></label>
                </div><br>
                <div class="custom-control custom-radio">
                    <input type="radio" id="r5" name="res" class="custom-control-input" value="<?php echo $r5 ?>">
                    <label class="custom-control-label" for="r5"><?php echo $r5 ?></label>
                </div><br>
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
                            echo "voce errou, voce selecionou ".substr($_POST['res'], 0, 3). "<br>a resposta é ".$questaocerta;
                        }
                    }
                }
                ?>

            </form>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              

        </div>
    </div>
</div>
</body>
</html>