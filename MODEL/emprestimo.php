<?php 

    namespace MODEL;
    use DateTime;

    class Emprestimo {
        private ?int $id; 
        private ?int $aluno; 
        private ?string $nomeAluno;
        private ?int $livro; 
        private ?string $tituloLivro; 
        private ?DateTime $emprestimo; 
        private ?DateTime $devolucao; 

        public function __construct()
        {
            
        }

        public function getId(){
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }
       
        public function getAluno(){
            return $this->aluno; 
        }

        public function setAluno(string $aluno){
            $this->aluno = $aluno; 
        }

        public function getNomeAluno(){
            return $this->nomeAluno; 
        }

        public function setNomeAluno(string $nomeAluno){
            $this->nomeAluno = $nomeAluno; 
        }

        public function getLivro(){
            return $this->livro; 
        }

        public function setLivro(string $livro){
            $this->livro = $livro; 
        }

        public function getTituloLivro(){
            return $this->tituloLivro; 
        }

        public function setTituloLivro(string $tituloLivro){
            $this->tituloLivro = $tituloLivro; 
        }

        public function getEmprestimo () {
            return $this->emprestimo;
        }

        public function setEmprestimo(DateTime $emprestimo){
            $this->emprestimo = $emprestimo; 
        }

        public function getDevolucao () {
            return $this->devolucao;
        }

        public function setDevolucao(DateTime $devolucao){
         $this->devolucao = $devolucao;
            
        }

    }

?>