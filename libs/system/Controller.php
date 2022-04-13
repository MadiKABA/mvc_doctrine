<?php
    namespace libs\system;
    use libs\system\View;
   // include dirname(__DIR__).'/../config/chargement.php';
    class Controller {

        protected $view;
        public function __construct()
        {
         $this->view=new View();   
        }
    }
?>