<?php
  include_once "C:/xampp/htdocs/lpbccphp2025/DAL/conexao.php";
  $sql = "select * from aluno;";
  $con = DAL\Conexao::conectar();
  $registros = $con->query($sql);
  $con = DAL\Conexao::desconectar();
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
    <h1>Listagem Geral de Alunos</h1>
    <table class="striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Série</th>
        </tr>

        <?php
         foreach ($registros as $linha) { ?>
            <tr>
                <td> <?php echo $linha['id']; ?> </td>
                <td> <?php echo $linha['nome'] ?> </td>
                <td> <?php echo $linha['curso'] ?> </td>
                <td> <?php echo $linha['serie'] ?> </td>
            </tr>
        <?php } ?>


    </table>
</body>
</html>