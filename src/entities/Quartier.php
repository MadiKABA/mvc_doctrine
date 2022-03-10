<?php
        use Doctrine\ORM\Mapping as ORM;
        use Doctrine\ORM\Mapping\ManyToOne;
        use Doctrine\ORM\Mapping\OneToMany;
        use Doctrine\ORM\Mapping\JoinColumn;

        /**
         * @ORM\Entity
         * @ORM\Table(name="quartiers")
         */
    class Quartier 
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
        private $nom;
        /**
         * Many Quartier have one Commune. This is the owning side.
         * @ManyToOne(targetEntity="Commune", inversedBy="quartiers")
         * @JoinColumn(name="commune_id", referencedColumnName="id")
         */
        private $commune;
        /**
         * One Quartier has many Entreprise. This is the inverse side.
         * @OneToMany(targetEntity="Entreprise", mappedBy="quartier")
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
         * Get the value of commune
         */ 
        public function getCommune()
        {
                return $this->commune;
        }

        /**
         * Set the value of commune
         *
         * @return  self
         */ 
        public function setCommune($commune)
        {
                $this->commune = $commune;

                return $this;
        }
    }