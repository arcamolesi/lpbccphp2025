<?php 
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/VIEW/menu.php";
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
    <title>Novo Aluno</title>
</head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text">
            <h1>Novo Aluno</h1>
        </div>
        <div class="row grey lighten-4 black-text">
           
           <form action="opInsAluno.php" method="POST" class="col s10">

                <div class="input-field col s8">
                    <input placeholder="" id="nome" name="nome" type="text" class="validate">
                    <label for="nomelabel">Nome: </label>
                </div>


                <div class="input-field col s8 ">
                    <input placeholder="" id="curso" name="curso" type="text" class="validate">
                    <label for="cursolabel">Curso: </label>
                </div>


                <div class="input-field col s8">
                    <input placeholder="" id="serie" name="serie" type="text" class="validate">
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