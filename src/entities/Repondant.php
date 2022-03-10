<?php
     use Doctrine\ORM\Mapping as ORM;
    /**
       * @ORM\Entity
       * @ORM\Table(name="repondants")
       */
    class Repondant{
       /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         * @var int 
         */
        private $id;
        /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $nom;
        /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $prenom;
        /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $email;
        /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $telephone;
        /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $fonction;


        private $entreprise;

        public function __construct()
        {
            
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
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of telephone
         */ 
        public function getTelephone()
        {
                return $this->telephone;
        }

        /**
         * Set the value of telephone
         *
         * @return  self
         */ 
        public function setTelephone($telephone)
        {
                $this->telephone = $telephone;

                return $this;
        }

        /**
         * Get the value of fonction
         */ 
        public function getFonction()
        {
                return $this->fonction;
        }

        /**
         * Set the value of fonction
         *
         * @return  self
         */ 
        public function setFonction($fonction)
        {
                $this->fonction = $fonction;

                return $this;
        }

        /**
         * Get the value of entreprise
         */ 
        public function getEntreprise()
        {
                return $this->entreprise;
        }

        /**
         * Set the value of entreprise
         *
         * @return  self
         */ 
        public function setEntreprise($entreprise)
        {
                $this->entreprise = $entreprise;

                return $this;
        }
    }