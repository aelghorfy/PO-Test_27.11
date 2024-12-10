<?php
class avion extends vehicule {
    protected int $altitudeMax;

    public function __construct(string $marque, string $model, int $kilometrage, int $vitesseMax, int $cylindre, int $altitudeMin, int $altitudeMax) {
        $this -> marque = $marque; 
        $this-> model = $model;
        $this -> kilometrage = $vitesseMax; 
        $this -> cylindre = $cylindre;
        $this -> altitudeMax = $altitudeMax;
    
    }
        
        public function vol () {}
        
        public function setMarque (string $marque){
        
        $this -> marque =$marque;
        }
        public function getMarque(){
            return $this -> marque;
        
        
        }

        public function setModel (string $model){
            $this -> model = $model;
        }
        public function getModel (){
            return $this -> model;
        }


        public function setKilometrage (int $kilometrage){
            $this -> kilometrage = $kilometrage;
        }
        public function getKilometrage(){
            return $this -> kilometrage;
        }


        public function setCylindre (int $cylindre){
            $this -> kilometrage = $cylindre;
        }
        public function getCylindre(){
            return $this -> Cylindre;
        }


        public function setAltitudeMax (int $altitudeMax){
            $this -> altitudeMax = $altitudeMax;
        }
        public function getAltitudeMax (){
            return $this -> altitudeMax;
        }

        public function deplace(){
            echo "Je vole" ;

        }

        public function accelere(){
            echo "je pousse la manette des gaz à fond ";

        }

        public function freine(){
            echo "j'inverse la poussé ";

        }

        public function bruit(){
            echo "grondement de réacteur ";

        }
}
