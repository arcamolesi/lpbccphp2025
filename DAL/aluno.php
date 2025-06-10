<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEl/aluno.php";

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

   public function SelectById(int $id)
   {
      $sql = "select * from aluno where id=?;";
      $con =  Conexao::conectar();
      $query = $con->prepare($sql);
      $query->execute(array($id));
      $linha = $query->fetch(\PDO::FETCH_ASSOC);
      $con = Conexao::desconectar();

      $aluno = new \MODEL\Aluno();
      $aluno->setId($linha['id']);
      $aluno->setNome($linha['nome']);
      $aluno->setCurso($linha['curso']);
      $aluno->setSerie($linha['serie']);

      return $aluno;
   }


   public function Insert(\MODEL\Aluno $aluno)
   {
      $sql = "INSERT INTO aluno (nome, curso, serie)
           VALUES ('?','{$aluno->getCurso()}', '{$aluno->getSerie()}');";

      $con = Conexao::conectar();
      $result = $con->query($sql);
      $con = Conexao::desconectar();

      // echo $result->errorCode();

      return $result;
   }


   public function Update(\MODEL\Aluno $aluno)
   {
      $sql = "UPDATE aluno SET nome = ?, curso = ?, serie = ? WHERE id = ?;";

      $con = Conexao::conectar();
      $query = $con->prepare($sql);
      $result = $query->execute(array($aluno->getNome(), $aluno->getCurso(), $aluno->getSerie(), $aluno->getID()));
      $con = Conexao::desconectar();

      return $result;
   }

   public function Delete(int $id)
   {
      $sql = "DELETE FROM aluno WHERE id = ?;";

      $con = Conexao::conectar();
      $query = $con->prepare($sql);
      $result = $query->execute(array($id));
      $con = Conexao::desconectar();

      return $result;
   }
}
