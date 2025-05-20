<?php

namespace DAL;

include_once "C:/xampp/htdocs/lpbccphp2025/DAL/conexao.php";
include_once "C:/xampp/htdocs/lpbccphp2025/MODEl/aluno.php";

use DAL\Conexao;

class Aluno
{
   public function Select()
   {
      $sql = "select * from aluno;";
      $con =  Conexao::conectar();
      $registros = $con->query($sql);  // criando o recordset
      $con = Conexao::desconectar();

      foreach ($registros as $linha) {
         $aluno = new \MODEL\Aluno();
         $aluno->setId($linha['id']);
         $aluno->setNome($linha['nome']);
         $aluno->setCurso($linha['curso']);
         $aluno->setSerie($linha['serie']);

         $lstAlunos[] = $aluno;
      }

      return $lstAlunos;
   }



   public function SelectId(int $id) {}


   public function Insert(\MODEL\Aluno $aluno)
   {
      $sql = "INSERT INTO aluno (nome, curso, serie)
           VALUES ('{$aluno->getNome()}','{$aluno->getCurso()}', '{$aluno->getSerie()}');";

      $con = Conexao::conectar();
      $result = $con->query($sql);
      $con = Conexao::desconectar();

      // echo $result->errorCode();

      return $result;
   }



   public function Update() {}
   public function Delete() {}
}
