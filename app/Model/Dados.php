<?php 

    class Dados{
        private $BI;
        private $e_mail;
        private $telefone;
        private $morada;
	
        public function __construct($bi, $mail, $tel, $mo)
        {
            $this->BI = $bi;
            $this->e_mail = $mail;
            $this->telefone = $tel;
            $this->morada = $mo;
        }



       
        public function getBI()
        {
            return $this->BI;
        }

      
        public function setBI($BI)
        {
            $this->BI = $BI;
        }

       
        public function getE_mail()
        {
            return $this->e_mail;
        }

       
        public function setE_mail($e_mail)
        {
            $this->e_mail = $e_mail;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }

        public function getMorada()
        {
            return $this->morada;
        }

        public function setMorada($morada)
        {
            $this->morada = $morada;
        }

        public function gravar_dados(){

        }

        public function editar_dados(){

        }

        public function eliminar_dados(){

        }

        public function mandar_mail(){
            
        }

    }

?>