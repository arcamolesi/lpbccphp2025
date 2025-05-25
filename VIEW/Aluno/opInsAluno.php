<?php 
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/aluno.php"; 
  include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/aluno.php";

  $aluno = new MODEL\Aluno(); 
  $aluno->setNome($_POST['nome']);
  $aluno->setCurso($_POST['curso']); 
  $aluno->setSerie($_POST['serie']); 


  $dalAluno = new DAL\Aluno(); 
  $dalAluno->Insert($aluno); 

  header("location: lstaluno.php");
?>