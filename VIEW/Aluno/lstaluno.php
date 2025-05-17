<?php
  include_once "C:/xampp/htdocs/lpbccphp2025/DAL/aluno.php";
  include_once "C:/xampp/htdocs/lpbccphp2025/MODEL/aluno.php"; 
  use DAL\Aluno; 

  $dalAluno = new DAL\Aluno(); 
  $lstAlunos = $dalAluno->Select(); 
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
          
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
</head>
<body>
    <div class="row">
    <div class="col m8 s8 offset-m2 offset-s2 center">
    <h1>Listagem Geral de Alunos</h1>
    <table class="striped  blue-grey lighten-2">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Série</th>
        </tr>

        <?php
         foreach ($lstAlunos as $aluno) { ?>
            <tr>
                <td> <?php echo $aluno->getId(); ?> </td>
                <td> <?php echo $aluno->getNome(); ?> </td>
                <td> <?php echo $aluno->getCurso(); ?> </td>
                <td> <?php echo $aluno->getSerie(); ?> </td>
            </tr>
        <?php } ?>


         </table>

    </div>
    </div>
</body>
</html>