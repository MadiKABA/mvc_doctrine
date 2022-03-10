<?php
        use Doctrine\ORM\Mapping as ORM;
        use Doctrine\ORM\Mapping\ManyToOne;
        use Doctrine\ORM\Mapping\OneToMany;
        use Doctrine\ORM\Mapping\JoinColumn;

        /**
         * @ORM\Entity
         * @ORM\Table(name="departements")
         */
    class Departement 
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
         * Many departements have one regions. This is the owning side.
         * @ManyToOne(targetEntity="Region", inversedBy="departements")
         * @JoinColumn(name="region_id", referencedColumnName="id")
         */
        private $region;


        /**
         * One Departement has many Commune. This is the inverse side.
         * @OneToMany(targetEntity="Commune", mappedBy="departement")
         */
        private $communes;


        public function __construct()
        {
                $this->communes = new ArrayCollection();
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
         * Get the value of region
         */ 
        public function getRegion()
        {
                return $this->region;
        }

        /**
         * Set the value of region
         *
         * @return  self
         */ 
        public function setRegion($region)
        {
                $this->region = $region;

                return $this;
        }
    }