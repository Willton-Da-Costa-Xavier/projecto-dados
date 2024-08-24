<?php 

    class Usuario{
        private $nome;
        private $senha;
        private $mail;
	
	    public function __construct()
	    {
		    
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

        public function Cadastro($mail,$senha,$username){
            

        }

        public function login(){

        }


        public function getMail()
        {
            return $this->mail;
        }

       
        public function setMail($mail)
        {
            $this->mail = $mail;
        }
    }

?>