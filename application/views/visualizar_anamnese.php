<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Vinicius de Macedo Salmoria">
    <link rel="stylesheet" type="text/css" href="\winaudio\bootstrap\css\bootstrap.css">
    <title>CRUD Anamnese</title>
</head>
<body>
    <div class="container border border-dark">
        <header>
            <div class="row text-center mb-5">
                <div class="col-sm-12 col-12">
                    <h1>Visualizar Anamnese</h1>
                </div>
            </div>
        </header>
        <form action="" name="form_add" method="">
            <div class="row mb-3">
                <div class="col-sm-12 col-12">
                    <label>Anamnese:</label>
                    <input type="text" name="pergunta" 
                    value="<?php echo $anamneses->pergunta ?>" 
                    class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-12">
                    <label>Resposta:</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12 col-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta" id="inlineRadio1" value="Sim"
                        <?php echo ($anamneses->resposta == 'Sim' ? 'checked' : "") ?> disabled>
                        <label class="form-check-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="resposta" id="inlineRadio2" value="Não"
                        <?php echo ($anamneses->resposta == 'Não' ? 'checked' : "") ?> disabled>
                        <label class="form-check-label" for="inlineRadio2">Não</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3 text-center">
                <div class="col-sm-12 col-12">
                    <a class="btn btn-primary" href="/winaudio" role="button">Voltar</a>
                </div>
            </div>
        </form>
    </div>    
</body>
<script src="\winaudio\bootstrap\js\jquery-slim.min.js"></script>
<script src="\winaudio\bootstrap\js\popper.min.js"></script>
<script src="\winaudio\bootstrap\js\bootstrap.js"></script>
</html>