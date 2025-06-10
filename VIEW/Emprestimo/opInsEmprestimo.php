<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEL/livro.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/emprestimo.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/livro.php";

$dalLivro = new DAL\Livro(); 
$dalEmprestimo = new DAL\Emprestimo(); 

$emprestimo = new \MODEL\Emprestimo(); 
$emprestimo->setAluno($_POST['aluno']);
$emprestimo->setLivro($_POST['livro']); 
$dataEmp= date_create($_POST['dataEmp']);
$emprestimo->setEmprestimo($dataEmp); 
$dataDev= date_create("1/1/1900");
$emprestimo->setDevolucao($dataDev);

$livro = new \MODEL\Livro(); 
$livro = $dalLivro->SelectById($emprestimo->getLivro()); 
$livro->setStatus('I'); 

$dalLivro->Update($livro); 

$dalEmprestimo->Insert($emprestimo); 





?> 