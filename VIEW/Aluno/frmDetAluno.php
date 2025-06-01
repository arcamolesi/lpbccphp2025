<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEl/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/VIEW/menu.php";

$id = $_GET['id'];
// echo "id: ". $id . "</br>"; 

$dalAluno = new \DAL\Aluno();
$aluno = $dalAluno->SelectById($id);

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
    <title>Detalhes de Aluno</title>
</head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text">
            <h1>Detalhes de Aluno</h1>
        </div>
        <div class="row grey lighten-4 black-text">

            <h5>ID: <?php echo $id?> </h5>
            <input type="hidden" name="id" value=<?php echo $id; ?>>
            <h5>Nome: <?php echo $aluno->getNome(); ?> </h5>
            <h5>Curso: <?php echo $aluno->getCurso(); ?> </h5>
            <h5>Série: <?php echo $aluno->getSerie(); ?> </h5>

            <div class="center row col s8">
                <button class="btn waves-effect waves-light orange" type="button"
                 onclick="JavaScript:location.href='frmEdtAluno.php?id='+ '<?php echo $id; ?>'"
                >Editar
                    <i class="material-icons right">edit</i>
                </button>

                <button class="btn waves-effect waves-light red" type="button"
                 onclick="JavaScript: remover( <?php echo $aluno->getId(); ?> )">Remover
                    <i class="material-icons right">delete</i>
                </button>

                <button class="btn waves-effect waves-light blue" type="button"
                    onclick="JavaScript:location.href='lstaluno.php'">Voltar
                    <i class="material-icons right">arrow_back</i>
                </button>
            </div>



        </div>
        <div class="row"></div>
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