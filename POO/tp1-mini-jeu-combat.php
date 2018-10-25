<?php
//CLASS PERSONNAGE
class Personnage{
    //ATTRIBUTS
    private $id;
    private $nom;
    private $degats; 

    //CONSTRUCTEUR
    public function __construct($id, $nom, $degats){
        $this->id = $id;
        $this->nom = $nom;
        $this->degats = $degats;
    }
    //GETTER
    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getDegats(){
        return $this->degats;
    }
    //SETTER
    public function setId($setId){
        $this->id = $setId;
    }
    public function setNom($setNom){
        $this->nom = $setNom;
    }
    public function setDegats($setDegats){
        $this->degats = $setDegats;
    }
    //METHODES
    public function atk($persoAAtk){
        if ($this->id == $persoAAtk->id){
            echo "Vous ne pouvez pas vous attaquer vous-meme.";
        }else{
            return $persoAAtk->recoisAtk();
        }
    }
    public function recoisAtk(){
        $this->degats += 5;
        if($this->degats >= 100){
            echo "mort";
        }else{
            echo "toujours en vie";
        }
        
    }
}
//CLASS PERSONNAGEMANAGER
class PersonnageManager{
    private $bdd;

    public function __construct($bdd){
        $this->setBdd($bdd);
    }
    public function addPerso($perso){
        // Préparation de la requête d'insertion.
        // Assignation des valeurs pour le nom du personnage.
        // Exécution de la requête.
        // Hydratation du personnage passé en paramètre avec assignation de son identifiant et des dégâts initiaux (= 0).
        $req = $this->bdd->prepare('INSERT INTO personnages(nom) VALUES(?)');
        $req->execute(array($perso->nom));
    }
    public function count(){
        // Exécute une requête COUNT() et retourne le nombre de résultats retourné.
        return $this->bdd->query('SELECT COUNT(*) FROM personnages')->fetchColumn();
    }
    public function effacePerso($perso){
        // Exécute une requête de type DELETE.
        $this->bdd->exec('DELETE FROM personnages WHERE id='.$perso->id());  
    }
    public function exist($info){
        // Si le paramètre est un entier, c'est qu'on a fourni un identifiant.
        // On exécute alors une requête COUNT() avec une clause WHERE, et on retourne un boolean.
        // Sinon c'est qu'on a passé un nom.
        // Exécution d'une requête COUNT() avec une clause WHERE, et retourne un boolean.
        if (is_int($info)){
            return $this->bdd->query('SELECT COUNT(*) FROM personnages WHERE id='.$info)->fetchColumn();
        } //else ??
        $req = $this->bdd->prepare('SELECT COUNT(*) FROM personnages WHERE nom = ?');
        $req->execute(array($info));
        return $req->fetchColumn();

    }
    public function get($info){
        // Si le paramètre est un entier, on veut récupérer le personnage avec son identifiant.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
        // Sinon, on veut récupérer le personnage avec son nom.
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
        if (is_int($info)){
            $req = $this->bdd->prepare('SELECT id, nom, degats FROM personnages WHERE id='.$info);
            $donnees = $req->fetch(PDO::FETCH_ASSOC);
            return new Personnage($donnees);
        }else{
            $req = $this->bdd->prepare('SELECT id, nom, degats FROM personnages WHERE nom=?');
            $req->execute(array($info));

            return new Personnage($req->fetch(PDO::FETCH_ASSOC));
        }
    }
    public function getList($nom){
        // Retourne la liste des personnages dont le nom n'est pas $nom.
        // Le résultat sera un tableau d'instances de Personnage.
        $persos = [];
        $req = $this->bdd->prepare('SELECT id, nom, degats FROM personnages WHERE nom <> :nom ORDER BY nom');
        $req->execute([':nom' => $nom]);

        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $persos[] = new Personnage($donnees);
        }
        return $persos;
    }
    public function majPerso($perso){
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
        $req = $this->bdd->prepare('UPDATE personnages SET degats = :degats WHERE id = :id');
        $req->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
        $req->bindValue(':id', $perso->id(), PDO::PARAM_INT);
        $req->execute();
    }
    public function setBdd($bdd){
        $this->bdd = $bdd;
    }

    
}
//OBJET
$surikate = new Personnage(1, "Surikate", 50);
$lemurien = new Personnage(2, "Lémurien", 50);
var_dump($surikate->getNom());
var_dump($surikate->getId());
var_dump($surikate->getDegats());

var_dump($lemurien->getNom());
var_dump($lemurien->getId());
var_dump($lemurien->getDegats());

var_dump($surikate->atk($lemurien));
var_dump($lemurien->getDegats());


?>

