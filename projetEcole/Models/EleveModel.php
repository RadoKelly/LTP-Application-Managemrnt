<?php
    class EleveModel{
        private $id;
        private $nom;
        private $prenom;
        private $date_naissance;
        private $numero;
        private $matricule;
        private $sexe;
        private $secteur;
        private $filiere;
        private $niveau;

        public function __construct($id,$nom,$prenom,$date_naissance,$numero,$matricule,$sexe,$secteur,$filiere,$niveau){
        $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_naissance = $date_naissance;
            $this->numero = $numero;
            $this->matricule = $matricule;
            $this->sexe = $sexe;
            $this->secteur = $secteur;
            $this->filiere = $filiere;
            $this->niveau = $niveau;
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
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of date_naissance
         */ 
        public function getDate_naissance()
        {
                return $this->date_naissance;
        }

        /**
         * Set the value of date_naissance
         *
         * @return  self
         */ 
        public function setDate_naissance($date_naissance)
        {
                $this->date_naissance = $date_naissance;

                return $this;
        }

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of matricule
         */ 
        public function getMatricule()
        {
                return $this->matricule;
        }

        /**
         * Set the value of matricule
         *
         * @return  self
         */ 
        public function setMatricule($matricule)
        {
                $this->matricule = $matricule;

                return $this;
        }

        /**
         * Get the value of sexe
         */ 
        public function getSexe()
        {
                return $this->sexe;
        }

        /**
         * Set the value of sexe
         *
         * @return  self
         */ 
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        /**
         * Get the value of secteur
         */ 
        public function getSecteur()
        {
                return $this->secteur;
        }

        /**
         * Set the value of secteur
         *
         * @return  self
         */ 
        public function setSecteur($secteur)
        {
                $this->secteur = $secteur;

                return $this;
        }

        /**
         * Get the value of filiere
         */ 
        public function getFiliere()
        {
                return $this->filiere;
        }

        /**
         * Set the value of filiere
         *
         * @return  self
         */ 
        public function setFiliere($filiere)
        {
                $this->filiere = $filiere;

                return $this;
        }

        /**
         * Get the value of niveau
         */ 
        public function getNiveau()
        {
                return $this->niveau;
        }

        /**
         * Set the value of niveau
         *
         * @return  self
         */ 
        public function setNiveau($niveau)
        {
                $this->niveau = $niveau;

                return $this;
        }
    }
?>