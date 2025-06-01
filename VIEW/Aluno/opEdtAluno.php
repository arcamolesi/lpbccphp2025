<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/aluno.php";

$aluno = new MODEL\Aluno();
$aluno->setId($_POST['id']);
$aluno->setNome($_POST['nome']);
$aluno->setCurso($_POST['curso']);
$aluno->setSerie($_POST['serie']);

//echo "NOme: " . $aluno->getNome(); 

$dalAluno = new DAL\Aluno();
$dalAluno->Update($aluno);

header("location: lstaluno.php");


