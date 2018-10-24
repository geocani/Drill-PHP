<?php

class Personnage{
    public $nom = "Surikate";
    public $xp = 1;
    public $vie = 100;

    public function crierNom(){
        return "Je m'appel Surikate";
    }
    public function plusXp(){
        return $this->xp += 1;
    }
    public function atk(Personnage $persoAAtk){
        return $persoAAtk->vie -= 10;
    }
    public function vie(){
        return $this->vie;
    }
    public function setVie($nbVie){
        return $this->vie = $nbVie;
    }
}


$surikate = new Personnage;
$lemurien = new Personnage;
var_dump($surikate->xp);
var_dump($lemurien->vie);
var_dump($surikate->atk($lemurien));
var_dump($lemurien->vie);
var_dump($surikate->plusXp());
var_dump($surikate->xp);

var_dump($lemurien->vie);
var_dump($surikate->vie);
var_dump($surikate->setVie(55));