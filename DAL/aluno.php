<?php 
   namespace DAL; 
   include_once "C:/xampp/htdocs/lpbccphp2025/DAL/conexao.php";
   include_once "C:/xampp/htdocs/lpbccphp2025/MODEl/aluno.php";
   use DAL\Conexao; 

   class Aluno{
        public function Select() {
           $sql = "select * from aluno;";
           $con =  Conexao::conectar();
           $registros = $con->query($sql);
           $con = Conexao::desconectar();

           foreach($registros as $linha){
               $aluno = new \MODEL\Aluno(); 
               $aluno-> setId($linha['id']); 
               $aluno->setNome($linha['nome']);
               $aluno->setCurso($linha['curso']);
               $aluno->setSerie($linha['serie']); 

               $lstAlunos[] = $aluno; 
           }

           return $lstAlunos; 
        }



        public function SelectId(int $id){}
        public function Insert(){}
        public function Update(){}
        public function Delete(){}
   }


?> 