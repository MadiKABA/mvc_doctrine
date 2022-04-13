<?php

use libs\system\Controller;
require_once dirname(__DIR__).".\..\config\autoload.php";
    class EntrepriseController extends Controller
    {
        
       private $entreprisedb;

       public function __construct()
       {
            parent::__construct();
            $this->entreprisedb=new EntrepriseDb();
       }


       public function index()
       {
            $entreprises= $this->entreprisedb->findAll();
            return $this->view->load("entreprise/list",$entreprises);
       }
        public function create()
        {
            $quartier=$this->entreprisedb->findAllQuartier();
            $nbre_employe=$this->entreprisedb->findAllNbre_employe();
            $domaineActivite=$this->entreprisedb->findAllDomaineActivite();
            $regimeJuridique=$this->entreprisedb->findAllRegimeJuridique();
            $repondant=$this->entreprisedb->findAllRepondant();
     
     


            $data=
            [
                'quartiers'=>$quartier,
                'nbre_enployes'=>$nbre_employe,
                'domaineActivites'=>$domaineActivite,
                'regimeJuridique'=>$regimeJuridique,
                'repondants'=>$repondant,
            ];
                
            return $this->view->load("entreprise/add",$data);
        }

        public function getAll()
        {
            $regions=array("Dakar","Tambakounda");
            return $this->view->load("regions/list",$regions);
        }

        public function add()
        {
            $entreprise=new Entreprise();
           
            $entreprise->setNom($_POST["nom"]);
            $entreprise->setSiege_social($_POST["siegeSocial"]);
            $entreprise->setNimea($_POST["ninea"]);
            $entreprise->setPage_web($_POST["siteWeb"]);
            $entreprise->setDate_creation($_POST["dateCreation"]);
            $quartier=$this->entreprisedb->findQuartier((int)$_POST["quartier_id"]);
            $domaine=$this->entreprisedb->findDomaineActivite((int)$_POST["domaine_id"]);
            $nbre_employe=$this->entreprisedb->findNbre_employe((int)$_POST["quartier_id"]);
            $regime_juridique=$this->entreprisedb->findRegimeJuridique((int)$_POST["regime_id"]);
            $entreprise->setQuartier($quartier);
            $entreprise->setDomaine($domaine);
            $entreprise->setNbre_employe($nbre_employe);
            $entreprise->setRegime_juridique($regime_juridique);
            $entreprise->setCoordonnee_gps($_POST["coordonnee_gps"]);
            $entreprise->setDispositif_formation(false);

            $this->entreprisedb->persist($entreprise);

            header("location: http://localhost/mesProjest/doctrine-ModuleGproprietaire/Proprietaire/index");
          
            
        }
    }
?>