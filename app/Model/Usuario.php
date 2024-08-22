<?php 

    class Usuario{
        private $nome;
        private $senha;
	
	    public function __construct($n, $s)
	    {
		    $this->nome = $n;
		    $this->senha = $s;
	    }



        

        public function getNome()
        {
            return $this->nome;
        }

        
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

      
        public function getSenha()
        {
            return $this->senha;
        }

      
        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

        public function Cadastro(){

        }

        public function login(){

        }
    }

?>