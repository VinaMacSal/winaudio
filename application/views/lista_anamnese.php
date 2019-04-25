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
                    <h1>Listagem de Anamneses</h1>
                </div>
            </div>
        </header>
        <div class="row text-left mb-3">
            <div class="col-sm-12 col-12">
                <a class="btn btn-success" href="anamnese/adicionar" role="button">Nova Anamnese</a>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Anamnese</th>
                            <th scope="col">Resposta</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($anamneses as $anamnese) {
                                echo '<tr>';
                                    echo '<td>'.$anamnese->id.'</td>';
                                    echo '<td>'.$anamnese->pergunta.'</td>';
                                    echo '<td>'.$anamnese->resposta.'</td>';
                                    echo '<td>';
                                    echo '<a class="btn btn-primary" href="anamnese/visualizar/'.$anamnese->id.'" role="button">V</a>';
                                    echo '<a class="btn btn-secondary" href="anamnese/alterar/'.$anamnese->id.'" role="button">A</a>';
                                    echo '<a class="btn btn-danger" href="anamnese/excluir/'.$anamnese->id.'" role="button">E</a>';
                                    echo '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="\winaudio\bootstrap\js\jquery-slim.min.js"></script>
<script src="\winaudio\bootstrap\js\popper.min.js"></script>
<script src="\winaudio\bootstrap\js\bootstrap.js"></script>
</html>