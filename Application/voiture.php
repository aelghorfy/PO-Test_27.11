<?php

Class voiture extends vehicule {


public function __construct(string $marque, string $model, int $kilometrage, int $vitesseMax, int $cylindre){
$this -> marque = $marque; 
$this-> model = $model;
$this -> kilometrage = $vitesseMax; 
$this -> cylindre = $cylindre;}

public function roule () {}

public function setMarque (string $marque){

$this -> marque =$marque;
}
public function getMarque(){
    return $this -> marque;


}
}