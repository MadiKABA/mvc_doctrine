<?php
 use Doctrine\ORM\Mapping as ORM;
 use Doctrine\ORM\Mapping\ManyToOne;
 use Doctrine\ORM\Mapping\OneToMany;
 use Doctrine\ORM\Mapping\JoinColumn;

        /**
         * @ORM\Entity
        * @ORM\Table(name="entreprises")
        */
    class Entreprise
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
         * @ORM\Column(type="string")
        * @var string
        */
        private $coordonnee_gps;
        /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $siege_social;
        /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $date_creation;
        /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $nimea;
        /**
         * @ORM\Column(type="boolean")
        * @var boolean
        */
        private $dispositif_formation;
         /**
         * @ORM\Column(type="string")
        * @var string
        */
        private $page_web;
        /**
         * Many Entreprise have one Quartier. This is the owning side.
         * @ManyToOne(targetEntity="NombreEmploye", inversedBy="entreprises")
         * @JoinColumn(name="nbre_employe_id", referencedColumnName="id")
         * @var int 
         */
         
        private $nbre_employe;
         /**
         * Many Entreprise have one Quartier. This is the owning side.
         * @ManyToOne(targetEntity="Quartier", inversedBy="entreprises")
         * @JoinColumn(name="quartier_id", referencedColumnName="id")
         * @var int 
         */
        private $quartier;
         /**
         * Many Entreprise have one regime_juridique. This is the owning side.
         * @ManyToOne(targetEntity="RegimeJuridique", inversedBy="entreprises")
         * @JoinColumn(name="regime_id", referencedColumnName="id")
         * @var int 
         */
        private $regime_juridique;
         /**
         * Many Entreprise have one domaine. This is the owning side.
         * @ManyToOne(targetEntity="DomaineActivite", inversedBy="entreprises")
         * @JoinColumn(name="domaine_id", referencedColumnName="id")
         * @var int 
         */
         
        private $domaine;
        
       

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
         * Get the value of coordonnee_gps
         */ 
        public function getCoordonnee_gps()
        {
                return $this->coordonnee_gps;
        }

        /**
         * Set the value of coordonnee_gps
         *
         * @return  self
         */ 
        public function setCoordonnee_gps($coordonnee_gps)
        {
                $this->coordonnee_gps = $coordonnee_gps;

                return $this;
        }

        /**
         * Get the value of siege_social
         */ 
        public function getSiege_social()
        {
                return $this->siege_social;
        }

        /**
         * Set the value of siege_social
         *
         * @return  self
         */ 
        public function setSiege_social($siege_social)
        {
                $this->siege_social = $siege_social;

                return $this;
        }

        /**
         * Get the value of date_creation
         */ 
        public function getDate_creation()
        {
                return $this->date_creation;
        }

        /**
         * Set the value of date_creation
         *
         * @return  self
         */ 
        public function setDate_creation($date_creation)
        {
                $this->date_creation = $date_creation;

                return $this;
        }

        /**
         * Get the value of nimea
         */ 
        public function getNimea()
        {
                return $this->nimea;
        }

        /**
         * Set the value of nimea
         *
         * @return  self
         */ 
        public function setNimea($nimea)
        {
                $this->nimea = $nimea;

                return $this;
        }

        /**
         * Get the value of page_web
         */ 
        public function getPage_web()
        {
                return $this->page_web;
        }

        /**
         * Set the value of page_web
         *
         * @return  self
         */ 
        public function setPage_web($page_web)
        {
                $this->page_web = $page_web;

                return $this;
        }

        /**
         * Get the value of quartier
         */ 
        public function getQuartier()
        {
                return $this->quartier;
        }

        /**
         * Set the value of quartier
         *
         * @return  self
         */ 
        public function setQuartier($quartier)
        {
                $this->quartier = $quartier;

                return $this;
        }

        /**
         * Get the value of regime_juridique
         */ 
        public function getRegime_juridique()
        {
                return $this->regime_juridique;
        }

        /**
         * Set the value of regime_juridique
         *
         * @return  self
         */ 
        public function setRegime_juridique($regime_juridique)
        {
                $this->regime_juridique = $regime_juridique;

                return $this;
        }

        /**
         * Get the value of domaine
         */ 
        public function getDomaine()
        {
                return $this->domaine;
        }

        /**
         * Set the value of domaine
         *
         * @return  self
         */ 
        public function setDomaine($domaine)
        {
                $this->domaine = $domaine;

                return $this;
        }

        /**
         * Get the value of dispositif_formation
         */ 
        public function getDispositif_formation()
        {
                return $this->dispositif_formation;
        }

        /**
         * Set the value of dispositif_formation
         *
         * @return  self
         */ 
        public function setDispositif_formation($dispositif_formation)
        {
                $this->dispositif_formation = $dispositif_formation;

                return $this;
        }

        /**
         * Get the value of dispositif_formation
         */ 
        public function getNbre_employe()
        {
                return $this->nbre_employe;
        }

        /**
         * Set the value of dispositif_formation
         *
         * @return  self
         */ 
        public function setNbre_employe($nbre_employe)
        {
                $this->nbre_employe = $nbre_employe;

                return $this;
        }
    }