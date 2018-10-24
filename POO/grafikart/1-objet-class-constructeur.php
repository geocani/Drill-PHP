<?php
///////////////////////////////////////////////////////////////////////
//  Appeler le constructeur pour instancier un objet
//
//  Pour ajouter des valeur directement dans la methode -- methode("__construct", "__construct")
//
//  Pour assigner directement les valeurs à leurs variables
//
//  La methode pour assigner une variable dans l'objet prendra le dessus
//////////////////////////////////////////////////////////////////////

// CLASS
class personnage{
    public $vie = 80;
    public $atk = 20;
    public $nom; // Sera définie par l'objet

    // CONSTRUCTEUR
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
    // Savoir si le perso est mort ou non.
    // Renvois true si 0 false si +0
    public function mort(){
        return $this->vie <= 0;
    }
    public function attaque($cible){
        $cible->vie -= $this->atk;
    }
}

// OBJECT

// PERSO UN // 
$merlin = new personnage("merlin"); // Appler le constructeur
$merlin->regenerer(); // Appel la methode regenerer 
$merlin->nom = "Merlin"; // Ecrit dans l'objet
var_dump($merlin->mort());

// PERSO DEUX //
$harry = new personnage("Harry"); // Appel la methode regenerer 
$harry->regenererDeux(); // Ecrit dans l'objet
$harry->attaque($merlin);





// VISUALISATION //
var_dump($merlin);
var_dump($harry);