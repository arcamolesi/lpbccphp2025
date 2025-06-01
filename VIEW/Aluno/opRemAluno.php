<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/aluno.php";

$id = $_GET['id'];

$dalAluno = new DAL\Aluno();
$dalAluno->Delete($id);
header("location: lstaluno.php");
?>
