<?php

        use Doctrine\ORM\Mapping as ORM;
        use Doctrine\ORM\Mapping\ManyToOne;
        use Doctrine\ORM\Mapping\OneToMany;
        use Doctrine\ORM\Mapping\JoinColumn;

        /**
         * @ORM\Entity
         * @ORM\Table(name="communes")
         */
    class Commune 
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
         * Many Commune have one Departement. This is the owning side.
         * @ManyToOne(targetEntity="Departement", inversedBy="communes")
         * @JoinColumn(name="depart_id", referencedColumnName="id")
         */
        private $departement;

         /**
         * One Commune has many Quartier. This is the inverse side.
         * @OneToMany(targetEntity="Quartier", mappedBy="commune")
         */
        private $quartiers;

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

        
    }