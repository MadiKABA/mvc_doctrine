<?php
    namespace libs\system;
    //include dirname(__DIR__).'../../config/chargement.php';
    class Model {

        protected $entityManager;
        protected $table;
        public function __construct()
        {
            require_once dirname(__DIR__)."\..\bootstrap.php";
            $this->entityManager=$entityManager;
        }

       
    }
?>