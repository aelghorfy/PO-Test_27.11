<?php
abstract class vehicule {
protected string $marque;
protected string $model;
protected int $kilometrage;
protected int $vitesseMax;
protected int $cylindre;

public function __construct(string $marque, string $model, int $kilometrage, int $vitesseMax, int $cylindre){
$this -> marque = $marque; 
$this-> model = $model;
$this -> kilometrage = $vitesseMax; 
$this -> cylindre = $cylindre;}

protected function deplace () {}

protected function accelere() {}
protected function freine() {}



}