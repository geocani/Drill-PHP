<?php

class personnage{
    public $vie = 80;
    public $atk = 20;
    public $nom; // Sera définie par l'objet

    public function __construct($nom){
        $this->nom = $nom;
    }
    
    public function crier(){
        echo "GOOOOOOOOOO";
    }
    public function regenerer(){
        // $this - Fait referance a l'objet qui l'appel
        $this->vie = 100;
    }
    public function regenererDeux(){
        $this->vie = 90;
    }


}