<?php 
  include_once "C:/xampp/htdocs/lpbccphp2025/MODEL/aluno.php"; 
  include_once "C:/xampp/htdocs/lpbccphp2025/DAL/aluno.php";

  $aluno = new MODEL\Aluno(); 
  $aluno->setNome($_POST['nome']);
  $aluno->setCurso($_POST['curso']); 
  $aluno->setSerie($_POST['serie']); 
  use DAL\Aluno; 

  $dalAluno = new DAL\Aluno(); 
  $lstAlunos = $dalAluno->Insert($aluno); 
  header("location: lstaluno.php");
?>