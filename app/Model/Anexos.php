<?php 

    class Anexos{
        private $nome;
        private $arquivo;
	
        public function __construct($n, $arq)
        {
            $this->nome = $n;
            $this->arquivo = $arq;
        }
       
        public function getNome()
        {
            return $this->nome;
        }

        
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getArquivo()
        {
            return $this->arquivo;
        }

        
        public function setArquivo($arquivo)
        {
            $this->arquivo = $arquivo;
        }

        public function guardar_anexo(){

        }

        public function eliminar_anexo(){
            
        }
    }


?>