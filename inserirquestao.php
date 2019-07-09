<?php include('db.php') ?>
<?php include ('page/header.html') ?>
    <body>
<?php include ('page/menu.php') ?>
<section class="get-in-touch">
    <h1 class="title">Adicionar Questão</h1>
    <form class="contact-form row" action="insertquestion.php" method="post">
        <div class="form-field col-lg-12">
            Questão:<br>
<textarea class="form-control" id="questao" name="questao" rows="3"></textarea>
<br>

            <input id="res1" name="res1" class="input-text js-input" type="text" required>

            <label class="label" for="res1" >Resposta 1</label>
        </div>
        <div class="form-field col-lg-12 ">
            <input id="res2" name="res2" class="input-text js-input" type="text" >
            <label class="label" for="res2">Resposta 2</label>
        </div>
        <div class="form-field col-lg-12 ">
            <input id="res3" name="res3" class="input-text js-input" type="text" >
            <label class="label" for="res3">Resposta 3</label>
        </div>
        <div class="form-field col-lg-12 ">
            <input id="res4" name="res4" class="input-text js-input" type="text" >
            <label class="label" for="res4">Resposta 4</label>
        </div>
        <div class="form-field col-lg-12">
            <input id="res5" name="res5"class="input-text js-input" type="text" >
            <label class="label" for="res5">Resposta 5</label>
        </div>
        <div class="form-field col-lg-12">
            <input id="questaocerta" name="questaocerta"class="input-text js-input" type="text" >
            <label class="label" for="questaocerta">Questão Correta: </label>
        </div>
        <div class="form-field col-lg-12">
            <input id="categoria" name="categoria"class="input-text js-input" type="text" >
            <label class="label" for="categoria">Categoria: </label>
        </div>
        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
        </div>
    </form>
</section>


    </body>
</html>
