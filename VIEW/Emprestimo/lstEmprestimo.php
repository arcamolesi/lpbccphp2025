<?php

include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/View/menu.php"; 
include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/MODEL/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/MODEL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/MODEL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/DAL/emprestimo.php";




use DAL\Emprestimo;

$dalEmprestimo = new \DAL\Emprestimo();
$lstEmprestimos = $dalEmprestimo->Select(); 

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Empréstimos</title> </head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text ">
            <h1>Empréstimos</h1> </div>
        <table class="striped blue-grey lighten-2 responsive-table"> <thead> <tr>
                    <th>ID</th>
                    <th>ALUNO</th> 
                    <th>NOME</th> 
                    <th>LIVRO</th> 
                    <th>TITULO</th>
                    <th>EMPRÉSTIMO</th>
                     <th>DEVOLUÇÃO</th> 
                     <th>OPERAÇÕES -
                        <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons"
                                onclick="JavaScript:location.href='/bib/view/emprestimo/frmInsEmprestimo.php'">add</i></a>
                        <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons"
                                onclick="JavaScript:location.href='/bib/view/home.php'">arrow_back</i></a>
                    </th>
                </tr>
            </thead>
            <tbody> <?php
                if (!empty($lstEmprestimos)) { 
                    foreach ($lstEmprestimos as $emprestimo) { ?>
                        <tr>
                            <td> <?php echo $emprestimo->getId(); ?> </td>
                            <td style="text-align: center;"> <?php echo $emprestimo->getAluno(); ?> </td>
                            <td> <?php echo $emprestimo->getNomeAluno(); ?> </td>
                            <td style="text-align: center;"> <?php echo $emprestimo->getLivro(); ?> </td>
                            <td> <?php echo $emprestimo->getTituloLivro(); ?> </td>
                            <td> <?php echo $emprestimo->getEmprestimo()->format('d/m/Y'); ?> </td>
                            <td> <?php echo $emprestimo->getDevolucao()->format('Y-m-d') != '1900-01-01' ?  $emprestimo->getDevolucao()->format('d/m/Y'): "---------" ; ?> </td>
                       
         
                                <td>
                                <a class="btn-floating btn-small waves-effect waves-light orange"
                                    onclick="JavaScript:location.href='frmEdtEmprestimo.php?id=' + '<?php echo $emprestimo->getId(); ?>'">
                                    <i class="material-icons">edit</i></a>

                                <a class="btn-floating btn-small waves-effect waves-light blue"
                                    onclick="JavaScript:location.href='frmDetEmprestimo.php?id=' + '<?php echo $emprestimo->getId(); ?>'"><i
                                        class="material-icons">details</i></a>

                                <a class="btn-floating btn-small waves-effect waves-light purple"
                                    onclick="JavaScript: devolver_livro(<?php echo $emprestimo->getId(); ?>)">
                                    <i class="material-icons">backspace</i></a>
                            </td>
                        </tr>
                <?php }
                } else {  ?>
                    <tr>
                        <td colspan="6" class="center-align">Nenhum empréstimo encontrado.</td>
                    </tr>
                <?php }  ?>
            </tbody>
        </table>
        <br />
    </div>
</body>
</html>

<script>
    function devolver_livro(id) {

        if (confirm('Confirma Devolução do Livro ' + id + '?')) {
            location.href = 'opDevolveLivro.php?id=' + id; 
        }
    }
</script>