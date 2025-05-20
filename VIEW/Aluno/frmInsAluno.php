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
    <div class="row container col s12 teal lighten-3 ">
        <div class=" center  teal lighten-4 ">
            <h1>Novo Aluno</h1>
        </div>

        <div class=" container col 12 grey lighten-3">
            <form action="insAluno.php" method="post" class="row col s12">
                <div class="row col s8">
                    <div class="input-field ">
                        <input placeholder="" id="nome" name="nome" type="text" class="validate">
                        <label for="nomelabel">Nome: </label>
                    </div>
                </div>
                <div class="row col s8">
                    <div class="input-field ">
                        <input placeholder="" id="curso" name="curso" type="text" class="validate">
                        <label for="cursolabel">Curso: </label>
                    </div>
                </div>
                <div class="row col s8">
                    <div class="input-field ">
                        <input placeholder="" id="serie" name="serie" type="text" class="validate">
                        <label for="serielabel">Série: </label>
                    </div>
                </div>

             <div class="row col s8">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons right">cloud</i>
                </button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>