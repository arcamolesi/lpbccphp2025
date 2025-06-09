<?php 
    namespace MODEL; 

    class Livro{
        private ?int $id; 
        private ?string $titulo; 
        private ?string $genero; 
        private ?float $valor;
        private ?string $status;

        public function __construct()
        {
            
        }

        public function getId(): ?int {
            return $this->id; 
        }

        public function setId(int $id): void {
            $this->id = $id; 
        }

        public function getTitulo(): ?string {
            return $this->titulo; 
        }

        public function setTitulo(string $titulo): void {
            $this->titulo = $titulo; 
        }

        public function getGenero(): ?string {
            return $this->genero; 
        }

        public function setGenero(string $genero): void {
            $this->genero = $genero; 
        }

        public function getValor(): ?float {
            return $this->valor;
        }

        public function setValor(float $valor): void {
            $this->valor = $valor; 
        }

        public function getStatus(): ?string {
            return $this->status;
        }

        public function setStatus(string $status): void {
            $this->status = $status;
        }
    }

?>