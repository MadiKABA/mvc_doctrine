<?php
//namespace src\controller;
use libs\system\Controller;

    class DepartementController extends Controller
    {
        public function add()
        {
            return $this->view->load("departements/add");
        }

        public function getAll()
        {
            $regions=array("Dakar","Tambakounda");
            return $this->view->load("departements/list",$regions);
        }
    }
?>