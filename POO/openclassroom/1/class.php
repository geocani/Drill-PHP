<?php


//CLASS
class Personnage{
    //VARIABLE
    public $force = 30;
    public $experience = 0;
    public $degats = 100;
    //METHODE
    public function parler(){
        echo "Je suis Geoffrey";
    }
    public function afficherForce(){ //1 Afficher la force
        echo $this->force;
    }
    public function ajouterForce(){ //2 Ajouter de la force
        $this->force = $this->force + 10;
    }
    public function frapper($persoAFrapper){ //3 Frapper un perso
        $persoAFrapper->degats += $this->force;
    }
    public function afficherDegats(){
        echo $this->degats;
    }
};

//OBJET

$geoffrey = new Personnage();
$laurent = new Personnage();

var_dump($geoffrey->force);
$geoffrey->ajouterForce(); //2 Ajouter de la force
$geoffrey->afficherForce(); //1 Afficher la force
$geoffrey->frapper($laurent);
$laurent->afficherDegats();

