<?php

class Personnage {
    public $nom;
    public $vie ;
    public $xp ;


    public function __construct($nom, $vie, $xp){
        $this->setVie($vie);
        $this->setNom($nom);
        $this->setXp($xp);
    }

    public function getNom(){
        return $this->nom;
    }
    public function plusXp(){
        return $this->xp += 1;
    }
    public function getXp(){
        return $this->xp;
    }
    public function getVie(){
        return $this->vie;
    }
    public function getForce(){
        return $this->force;
    }
    public function setNom($nom){
        return $this->nom = $nom;
    }
    public function setXp($nbXp){
        return $this->xp = $nbXp;
    }
    public function setvie($nbVie){
        return $this->vie = $nbVie;
    }
    public function setForce($nbForce){
        return $this->force = $nbForce;
    }
    public function atk($persoAAtk){
        return $persoAAtk->vie -= $this->force;
    }
}

$surikate = new Personnage("Surikate", 50, 50);
$lemurien = new Personnage("Lémurien", 30, 30);



// SANS CONSTRUCTEUR
// $surikate = new Personnage();
// $lemurien = new Personnage();
// var_dump($surikate->setNom("Surikate"));
// var_dump($surikate->getNom());
// var_dump($surikate->setVie(100));
// var_dump($surikate->setXp(10));
// var_dump($surikate->setForce(20));
// var_dump($lemurien->setNom("Lémurien"));
// var_dump($lemurien->getNom());
// var_dump($lemurien->setVie(80));
// var_dump($lemurien->setXp(5));
// var_dump($lemurien->setForce(10));
?>

<p><?php echo $surikate->nom ?> à <?php echo $surikate->getVie() ?> de vie tantdis que <?php echo $lemurien->nom ?> à <?php echo $lemurien->getVie() ?> vie.</p>
<p><?php echo $surikate->nom ?> à <?php echo $surikate->getXp() ?> de xp tantdis que <?php echo $lemurien->nom ?> à <?php echo $lemurien->getXp() ?> xp.</p>



