<?php
// session_start(); 
//   if (!isset($_SESSION['login']))
//      Header("Location: ../index.php");   
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="./js/init.js"></script>

  <title>Menu Principal de Operadores</title>
</head>

<body>
  
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

  <nav>
    <div class="nav-wrapper deep-orange lighten-1 ">
      <a href="https://www.fema.edu.br" class="brand-logo">
        <img class="materialboxed" width="250" height="63" src="/lpbccphp2025/view/images/fema.png">

      </a>

      
      <ul id="nav-mobile1" class="left">
        
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li style="font-weight: bold; color:black"> Usuario: <?php //echo $_SESSION['login'];
                      echo "camolesi"; ?></li>
        <li><a href="/lpbccphp2025/view/home.php">HOME</a></li>
        <li><a href="/lpbccphp2025/view/Aluno/lstaluno.php">ALUNOS</a></li>
        <li><a href="/lpbccphp2025/view/Livro/lstlivro.php">LIVROS</a></li>
        <li><a href="/lpbccphp2025/view/Emprestimo/lstemprestimo.php">EMPRÉSTIMOS</a></li>
        <li><a href="/lpbccphp2025/view/logout.php">LOGOUT</a></li>
      </ul>

      <ul id="slide-out" class="sidenav light-blue darken-3 white-text">
        <li>
          <div class="user-view deep-orange lighten-1 white-text">
            <div class="background white-text ">
              <img src="./imagens/book.jpg">
            </div>
            <a href="https:www.fema.edu.br"><img src="./imagens/fema.png"></a>
            <a href="#name"><span class="white-text name">Almir Camolesi</span></a>
            <a href="#email"><span class="white-text email">camolesi@fema.edu.br</span></a>
          </div>
        </li>
        <li><a href="/lpbccphp2025/view/home.php" class="white-text">HOME</a></li>
        <li><a href="/lpbccphp2025/view/Aluno/lstaluno.php" class="white-text"><i class="material-icons white-text">people</i>Alunos</a></li>

        <li>
          <div class="divider"></div>
        </li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
      </ul>
    </div>

  </nav>

</body>

</html>