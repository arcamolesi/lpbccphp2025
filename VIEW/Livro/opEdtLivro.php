<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/livro.php";

$livro = new MODEL\Livro();

$livro->setId($_POST['id']);
$livro->setTitulo($_POST['titulo']);
$livro->setGenero($_POST['genero']);
$livro->setValor($_POST['valor']);
$livro->setStatus($_POST['status']);

$dalLivro = new DAL\Livro();
$dalLivro->Update($livro);

header("location: lstlivro.php");
?>