<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/emprestimo.php";

//recuperar id do emprestimo
$id = $_GET['id'];



//atualizar emprestimo
$emprestimo = new MODEL\Emprestimo();
$dalEmprestimo = new DAL\Emprestimo();
$emprestimo = $dalEmprestimo->SelectById($id);
$data_atual = new DateTime();
$emprestimo->setDevolucao($data_atual);

//atualizar livro
$dalLivro = new dal\Livro();
$livro = $dalLivro->SelectById($emprestimo->getLivro());
if ($livro->getStatus() == 'I') {
  $livro->setStatus('D');
  $dalLivro->Update($livro);
}

$dalEmprestimo->Update($emprestimo);
header("location: lstEmprestimo.php");
?>