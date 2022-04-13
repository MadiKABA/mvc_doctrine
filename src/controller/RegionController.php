<?php
namespace src\controller;

use libs\system\Controller;

    class RegionController extends Controller
    {
        
        

        public function create()
        {
            return $this->view->load("regions/add");
        }

        public function getAll()
        {
            $regions=array("Dakar","Tambakounda");
            return $this->view->load("regions/list",$regions);
        }

        public function add()
        {
            $region=new Region();
            $region->setNom($_POST["nom"]);
           // $entityManager->persist($region);
            $entityManager->flush();
            
        }
    }
?>