<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/VIEW/menu.php";
use DAL\Aluno;

$dalAluno = new DAL\Aluno();
$lstAlunos = $dalAluno->Select();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
</head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class=" center  light-blue darken-3 white-text">
            <h1>Listagem Geral de Alunos</h1>
        </div>

        <table class="striped  blue-grey lighten-2">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>Série</th>
                <th>Operações -
                    <a class="btn-floating btn-small waves-effect waves-light green">
                        <i class="material-icons"
                            onclick="JavaScript:location.href='frmInsAluno.php'">add</i>
                    </a>

                </th>
            </tr>

            <?php
            foreach ($lstAlunos as $aluno) { ?>
                <tr>
                    <td> <?php echo $aluno->getId(); ?> </td>
                    <td> <?php echo $aluno->getNome(); ?> </td>
                    <td> <?php echo $aluno->getCurso(); ?> </td>
                    <td> <?php echo $aluno->getSerie(); ?> </td>
                    <td>
                        <a class="btn-floating btn-small waves-effect waves-light orange">
                            <i class="material-icons"
                                onclick="JavaScript:location.href='frmEdtAluno.php?id='+ '<?php echo $aluno->getID(); ?>'">edit</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light blue">
                            <i class="material-icons"
                                onclick="JavaScript:location.href='frmDetAluno.php?id='+ '<?php echo $aluno->getID(); ?>'">details</i>
                        </a>

                        <a class="btn-floating btn-small waves-effect waves-light red">
                            <i class="material-icons"
                                 onclick="JavaScript: remover( <?php echo $aluno->getId(); ?> )">delete</i>
                        </a>

                 
                    </td>
                </tr>
            <?php } ?>


        </table>
        <br />
    </div>

</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir Aluno ' + id + '?')) {
            location.href = 'opRemAluno.php?id=' + id;
        }
    }
</script>