<?php 
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/livro.php"; 
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/livro.php";
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/VIEW/menu.php";
   
  $id = $_GET['id'];
 
  $dalLivro = new DAL\Livro(); 
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
    <title>Editar Livro</title>
</head>

<body>
    <div class="container deep-orange lighten-1 col s12 ">
        <div class="center light-blue darken-3 white-text">
            <h1>Editar Livro</h1>
        </div>
        <div class="row grey lighten-4 black-text">
           
           <form action="opEdtLivro.php" method="POST" class="col s12">
                <div class="input-field col s12">
                    <label for="id" class="black-text bold">ID: <?php echo $livro->getID() ?></label>
                    <br/><br/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>

                <div class="input-field col s12">
                    <input id="titulo" name="titulo" type="text" class="validate" value="<?php echo $livro->getTitulo(); ?>">
                    <label for="titulo">Título:</label>
                </div>

                <div class="input-field col s12">
                    <input id="genero" name="genero" type="text" class="validate" value="<?php echo $livro->getGenero(); ?>">
                    <label for="genero">Gênero:</label>
                </div>

                <div class="input-field col s12">
                    <input id="valor" name="valor" type="number" step="0.01" class="validate" value="<?php echo $livro->getValor(); ?>">
                    <label for="valor">Valor (R$):</label>
                </div>
                
                <div class="input-field col s12">
                    <input id="status" name="status" type="text" maxlength="1" class="validate" value="<?php echo $livro->getStatus(); ?>">
                    <label for="status">Status:</label>
                </div>

                <div class="center row col s12">
                    <button class="btn waves-effect waves-light green" type="submit">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset">Limpar
                        <i class="material-icons right">clear_all</i>
                    </button>
                    <button class="btn waves-effect waves-light blue" type="button"
                    onclick="JavaScript:location.href='lstlivro.php'">Voltar
                        <i class="material-icons right">arrow_back</i>
                    </button>
                </div>
            </form>
        </div>
        <div class="row"></div>
    </div>
</body>
</html>