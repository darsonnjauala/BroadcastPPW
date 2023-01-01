<?php
    class Contacto{
        private $id;
        private $nome;
        private $contacto;
        private $email;

        public function __construct($id,$nome,$contacto,$email) {
            $this->id=$id;
            $this->nome=$nome;
            $this->contacto=$contacto;
            $this->email=$email;

        }

        public function getId(){ return $this->id;}
        public function setId($id){$this->id=$id;}
        public function getNome(){return $this->nome;}
        public function setNome($nome){$this->nome=$nome;}
        public function getContacto(){return $this->contacto; }
        public function setContacto($contacto){ $this->contacto=$contacto;}
        public function getEmail(){return $this->email;}
        public function setEmail($email){ $this->email=$email;}
    }
?>