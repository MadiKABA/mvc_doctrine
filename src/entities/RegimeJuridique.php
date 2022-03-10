<?php
 
 use Doctrine\ORM\Mapping as ORM;
 use Doctrine\ORM\Mapping\OneToMany;
      /**
       * @ORM\Entity
       * @ORM\Table(name="regime_juridiques")
       */
    class RegimeJuridique 
    {
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
        private $libelle;

         /**
         * One DoamineActivite has many Entreprise. This is the inverse side.
         * @OneToMany(targetEntity="Entreprise", mappedBy="regime_juridique")
         */
        private $entreprises;
        
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
         * Get the value of libelle
         */ 
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Set the value of libelle
         *
         * @return  self
         */ 
        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }
    }