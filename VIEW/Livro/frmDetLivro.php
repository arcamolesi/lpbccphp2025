<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEl/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/VIEW/menu.php";

$id = $_GET['id'];

$dalLivro = new \DAL\Livro();
$livro = $dalLivro->SelectById($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Livro</title>
</head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text">
            <h1>Detalhes do Livro</h1>
        </div>
        <div class="row grey lighten-4 black-text">

            <h5>ID: <?php echo $livro->getId(); ?></h5>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <h5>Título: <?php echo $livro->getTitulo(); ?></h5>
            <h5>Gênero: <?php echo $livro->getGenero(); ?></h5>
            <h5>Valor: <?php echo "R$ " . number_format($livro->getValor(), 2, ',', '.'); ?></h5>
            <h5>Status: <?php echo $livro->getStatus(); ?></h5>

            <div class="center row col s12">
                <button class="btn waves-effect waves-light orange" type="button"
                 onclick="JavaScript:location.href='frmEdtLivro.php?id='+ '<?php echo $id; ?>'">
                 Editar<i class="material-icons right">edit</i>
                </button>

                <button class="btn waves-effect waves-light red" type="button"
                 onclick="JavaScript: remover(<?php echo $livro->getId(); ?>)">
                 Remover<i class="material-icons right">delete</i>
                </button>

                <button class="btn waves-effect waves-light blue" type="button"
                    onclick="JavaScript:location.href='lstlivro.php'">
                    Voltar<i class="material-icons right">arrow_back</i>
                </button>
            </div>
        </div>
        <div class="row"></div>
    </div>
</body>
</html>

<script>
    function remover(id) {
        if (confirm('Deseja realmente excluir o Livro ' + id + '?')) {
            location.href = 'opRemLivro.php?id=' + id;
        }
    }
</script>