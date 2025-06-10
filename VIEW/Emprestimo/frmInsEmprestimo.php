<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/View/menu.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/livro.php";

$dalAluno = new DAL\Aluno();
$lstAlunos = $dalAluno->Select();

$dalLivro = new DAL\Livro();
$lstLivros = $dalLivro->SelectByStatus('D');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Empréstimo</title>
    <style>
        .input-field label {
            pointer-events: none;
        }
    </style>
</head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text ">
            <h1>Novo Empréstimo</h1>
        </div>

        <div class="row grey lighten-4 black-text" style="padding: 20px;">

            <form action="opInsEmprestimo.php" method="post" class="col s12 m10 offset-m1 l8 offset-l2">

                           <div class="input-field col s12">
                    <select id="aluno_id" name="aluno">
                        <option value="" disabled selected>Escolha o Aluno</option>
                        <?php
                           foreach ($lstAlunos as $aluno) { ?>
                             <option value="<?php echo $aluno->getId(); ?>">
                                <?php echo $aluno->getNome(); ?>
                             </option>
                        <?php } ?>
                    </select>
                    <label for="aluno_id">Aluno:</label>
                </div>

                <div class="input-field col s12">
                    <select id="livro_id" name="livro">
                        <option value="" disabled selected>Escolha o Livro</option>
                        <?php foreach ($lstLivros as $livro) { ?>
                             <option value="<?php echo $livro->getId();?>">
                                <?php echo $livro->getTitulo();?>
                             </option>
                       
                        <?php }?>
                    </select>
                    <label for="livro_id">Livro:</label>
                </div>

                <div class="input-field col s12 m6">
                    <input placeholder="" id="dataEmp" name="dataEmp" type="text" class="datepicker validate">
                    <label for="dataEmp">Data de Empréstimo:</label>
                </div>

                <!--                 <div class="input-field col s12 m6">
                    <input placeholder="" id="dataDev" name="dataDev" type="text" class="datepicker validate">
                    <label for="dataDev">Data de Devolução:</label>
                </div> -->

                <div class="row center col s12" style="margin-top: 20px;">
                    <button class="btn waves-effect waves-light green" type="submit" name="action">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons right">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstemprestimo.php'">
                        Voltar <i class="material-icons right">arrow_back</i>
                    </button>
                </div>
            </form>
        </div>
        <div class="row"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var selects = document.querySelectorAll('select');
            M.FormSelect.init(selects);


            var datepickers = document.querySelectorAll('.datepicker');
            M.Datepicker.init(datepickers, {
                format: 'dd-mm-yyyy',
                autoClose: true,
                i18n: {
                    cancel: 'Cancelar',
                    clear: 'Limpar',
                    done: 'Ok',
                    months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                    weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                    weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
                    weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S']
                }
            });
        });
    </script>
</body>

</html>