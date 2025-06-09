<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/VIEW/menu.php";
use DAL\Livro;


$dalLivro = new DAL\Livro();

if (isset($_GET['busca_titulo']) && !empty($_GET['busca_titulo'])) {
    $termoBusca = $_GET['busca_titulo'];
    $lstLivros = $dalLivro->SelectByTitulo($termoBusca);
} else {
    $termoBusca = '';
    $lstLivros = $dalLivro->Select();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Livros</title>
</head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text">
            <h1>Listagem Geral de Livros</h1>
        </div>

        <div class="row grey lighten-3">
            <form action="lstlivro.php" method="GET" class="col s12">
                <div class="input-field col s10">
                    <i class="material-icons prefix">search</i>
                    <input id="icon_prefix" type="text" name="busca_titulo" class="validate" value="<?php echo $termoBusca; ?>">
                    <label for="icon_prefix">Filtrar por Título...</label>
                </div>
                <div class="input-field col s2">
                    <button class="btn waves-effect waves-light" type="submit">Buscar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>

        <table class="striped responsive-table blue-grey lighten-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Valor</th>
                    <th>Status</th>
                    <th>Operações -
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='frmInsLivro.php'">
                            <i class="material-icons">add</i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($lstLivros)) { ?>
                    <?php foreach ($lstLivros as $livro) { ?>
                        <tr>
                            <td><?php echo $livro->getId(); ?></td>
                            <td><?php echo $livro->getTitulo(); ?></td>
                            <td><?php echo $livro->getGenero(); ?></td>
                            <td><?php echo "R$ " . number_format($livro->getValor(), 2, ',', '.'); ?></td>
                            <td><?php echo $livro->getStatus(); ?></td>
                            <td>
                                <a class="btn-floating btn-small waves-effect waves-light orange"
                                    onclick="JavaScript:location.href='frmEdtLivro.php?id=<?php echo $livro->getID(); ?>'">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a class="btn-floating btn-small waves-effect waves-light blue"
                                    onclick="JavaScript:location.href='frmDetLivro.php?id=<?php echo $livro->getID(); ?>'">
                                    <i class="material-icons">details</i>
                                </a>
                                <a class="btn-floating btn-small waves-effect waves-light red"
                                    onclick="JavaScript: remover(<?php echo $livro->getId(); ?>)">
                                    <i class="material-icons">delete</i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="6" class="center-align">Nenhum livro encontrado.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br />
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