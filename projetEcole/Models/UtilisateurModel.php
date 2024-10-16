<?php
    class UtilisateurModel{
        private $id;
        private $uti;
        private $mdp;

        public function __construct($uti,$mdp){
            $this->uti = $uti;
            $this->mdp = $mdp;
        }
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of uti
         */ 
        public function getUti()
        {
                return $this->uti;
        }

        /**
         * Set the value of uti
         *
         * @return  self
         */ 
        public function setUti($uti)
        {
                $this->uti = $uti;

                return $this;
        }

        /**
         * Get the value of mdp
         */ 
        public function getMdp()
        {
                return $this->mdp;
        }

        /**
         * Set the value of mdp
         *
         * @return  self
         */ 
        public function setMdp($mdp)
        {
                $this->mdp = $mdp;

                return $this;
        }
    }
?>