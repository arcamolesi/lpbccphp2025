<?php 
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/aluno.php"; 
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/aluno.php";
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/VIEW/menu.php";
   $id = $_GET['id'];
   //echo "id: ". $id; 
 
  $dalAluno = new DAL\Aluno(); 
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
    <title>Editar Aluno</title>
</head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text">
            <h1>Editar Aluno</h1>
        </div>
        <div class="row grey lighten-4 black-text">
           
           <form action="opEdtAluno.php" method="POST" class="col s10">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $aluno->getID() ?></label>
                    </br> </br>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>


                <div class="input-field col s8">
                    <input placeholder="" id="nome" name="nome" type="text" class="validate" 
                     value="<?php echo $aluno->getNome(); ?>" >
                    <label for="nomelabel">Nome: </label>
                </div>


                <div class="input-field col s8 ">
                    <input placeholder="" id="curso" name="curso" type="text" class="validate"
                     value="<?php echo $aluno->getCurso(); ?>" >
                    <label for="cursolabel">Curso: </label>
                </div>


                <div class="input-field col s8">
                    <input placeholder="" id="serie" name="serie" type="text" class="validate"
                     value="<?php echo $aluno->getSerie(); ?>">
                    <label for="serielabel">Série: </label>
                </div>


                <div class="center row col s8">
                    <button class="btn waves-effect waves-light green" type="submit">Gravar
                        <i class="material-icons right">save</i>
                    </button>

                    <button class="btn waves-effect waves-light red" type="reset">Limpar
                        <i class="material-icons right">clear_all</i>
                    </button>

                    <button class="btn waves-effect waves-light blue" type="button"
                    onclick="JavaScript:location.href='lstaluno.php'">Voltar
                        <i class="material-icons right">arrow_back</i>
                    </button>
                </div>
            </form>


        </div>
        <div class="row"></div>
    </div>
</body>

</html>