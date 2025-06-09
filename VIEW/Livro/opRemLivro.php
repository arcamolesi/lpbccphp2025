<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/livro.php";

$id = $_GET['id'];

$dalLivro = new DAL\Livro();
$dalLivro->Delete($id);

header("location: lstlivro.php");
?>