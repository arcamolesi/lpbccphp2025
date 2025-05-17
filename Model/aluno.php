<?php 
    namespace MODEL; 

    class Aluno{
        private ?int $id; 
        private ?string $nome; 
        private ?string $curso; 
        private ?int $serie; 

        public function __construct()
        {
            
        }

        public function getId(){
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getNome(){
            return $this->nome; 
        }

        public function setNome(string $nome){
            $this->nome = $nome; 
        }

        public function getCurso(){
            return $this->curso; 
        }

        public function setCurso(string $curso){
            $this->curso = $curso; 
        }

        public function getSerie () {
            return $this->serie;
        }

        public function setSerie(string $serie){
            $this->serie = $serie; 
        }
    }

?>