<?php
    use libs\system\Model;
    require_once dirname(__DIR__).".\..\config\autoload.php";
    class EntrepriseDb extends Model
    {
        public function __construct()
        {
            parent::__construct();
            //echo "ok";
        }
        public function findAll()
        {
            return $this->entityManager->createQuery("SELECT e FROM Entreprise e ")->getResult();
        }
        public function findAllQuartier(){
            return $this->entityManager
                        ->createQuery("SELECT q FROM Quartier q")
                        ->getResult();
        }

        public function findAllNbre_employe(){
            return $this->entityManager
                        ->createQuery("SELECT n FROM NombreEmploye n")
                        ->getResult();
        }

        public function findAllDomaineActivite(){
            return $this->entityManager
                        ->createQuery("SELECT d FROM DomaineActivite d")
                        ->getResult();
        }

        public function findAllRegimeJuridique(){
            return $this->entityManager
                        ->createQuery("SELECT r FROM RegimeJuridique r")
                        ->getResult();
        }

        public function findAllRepondant(){
            return $this->entityManager
                        ->createQuery("SELECT r FROM Repondant r")
                        ->getResult();
        }

        public function persist($entreprise)
        {
            $this->entityManager->persist($entreprise);
            $this->entityManager->flush();
        }

        public function findQuartier($id)
        {
            $quartier = $this->entityManager->getRepository('Quartier')->find($id);
            return $quartier;
        }
        public function findDomaineActivite($id)
        {
            $quartier = $this->entityManager->getRepository('DomaineActivite')->find($id);
            return $quartier;
        }

        public function findNbre_employe($id)
        {
            $quartier = $this->entityManager->getRepository('NombreEmploye')->find($id);
            return $quartier;
        }

        public function findRegimeJuridique($id)
        {
            $quartier = $this->entityManager->getRepository('RegimeJuridique')->find($id);
            return $quartier;
        }
        

        public function findRepondant($id)
        {
            $quartier = $this->entityManager->getRepository('Repondant')->find($id);
            return $quartier;
        }
        
        public function delete($id){
            $proprietaire = $this->entityManager->find("Entreprise",$id);
            $this->entityManager->remove($proprietaire);
            $this->entityManager->flush();
        }
        
    }
?>