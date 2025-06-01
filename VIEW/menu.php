<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 
 
    <script src="/lpbccphp2025/view/js/init.js"></script>

    <title>Página Principal - Sistema Livraria</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper deep-orange lighten-1 ">
            <a href="https://www.fema.edu.br">
                <img width="200" height="64" src="/lpbccphp2025/view/images/fema.png">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/lpbccphp2025/view/home.php">HOME</a></li>
                <li><a href="/lpbccphp2025/view/Aluno/lstaluno.php">ALUNOS</a></li>
                <li><a href="">LIVROS</a></li>
                <li><a href="">EMPRESTIMOS</a></li>
            </ul>
        </div>
    </nav>

    <ul id="slide-out" class="sidenav light-blue darken-3 white-text">
        <li>
            <div class="user-view deep-orange lighten-1 white-text">
                <div class="background">
                    <img src="/lpbccphp2025/view/images/femaPort2.png" class="align-center">
                </div>
                <a href="#user"><img class="circle" src="/lpbccphp2025/VIEW/images/pessoa.png"></a>
                <a href="#name"><span class="white-text name">Almir Camolesi</span></a>
                <a href="#email"><span class="white-text email">camolesi@fema.edu.br</span></a>
            </div>
        </li>
        <li><a href="/lpbccphp2025/View/home.php"><i class="material-icons white-text">home</i>Home</a></li>
        <li><a href="/lpbccphp2025/View/Aluno/lstaluno.php" class="white-text">Alunos</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>


</body>

</html>