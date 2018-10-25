<?php
session_start();
try
{
	// Connexion BDD
	$host = "localhost";
	$bddname = "test";
	$log = "root";
	$pass = "";
	$bdd = new PDO("mysql: host=$host; dbname=$bddname; charset=utf8", "$log", "$pass");
}
catch(Exception $e)
{
	// Erreur
        die('Erreur : '.$e->getMessage());
}
//////////////////////////////////////////////////////////////////////////////////////////////

$affiche_perso = $bdd->prepare("SELECT * FROM testun");
$affiche_perso->execute();

while($perso = $affiche_perso->fetch(PDO::FETCH_ASSOC)){
    echo $perso['nom'], ' a ', $perso['forcePerso'], ' de force, ', $perso['degats'], ' de dégâts, ', $perso['experience'], ' d\'expérience et est au niveau ', $perso['niveau'], "<br><br>";
?>

<?php
}
// // On admet que $db est un objet PDO.
// $request = $db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages');
    
// while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.
// {
//   // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
//   // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.
//   $perso = new Personnage($donnees);
        
//   echo $perso->nom(), ' a ', $perso->forcePerso(), ' de force, ', $perso->degats(), ' de dégâts, ', $perso->experience(), ' d\'expérience et est au niveau ', $perso->niveau();
// }
?>

<?php 





class Personnage
{
  private $_id;
  private $_nom;
  private $_forcePerso;
  private $_degats;
  private $_niveau;
  private $_experience;

  // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
  public function hydrate(array $donnees)
  {
 
  }

  public function id() { return $this->_id; }
  public function nom() { return $this->_nom; }
  public function forcePerso() { return $this->_forcePerso; }
  public function degats() { return $this->_degats; }
  public function niveau() { return $this->_niveau; }
  public function experience() { return $this->_experience; }

  // 



  public function setId($id)
  {
    // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
    $this->_id = (int) $id;
  }
        
  public function setNom($nom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($nom) && strlen($nom) <= 30)
    {
      $this->_nom = $nom;
    }
  }

  public function setForcePerso($forcePerso)
  {
    $forcePerso = (int) $forcePerso;
            
    // On vérifie que la force passée est comprise entre 0 et 100.
    if ($forcePerso >= 0 && $forcePerso <= 100)
    {
      $this->_forcePerso = $forcePerso;
    }
  }

  public function setDegats($degats)
  {
    $degats = (int) $degats;

    // On vérifie que les dégâts passés sont compris entre 0 et 100.
    if ($degats >= 0 && $degats <= 100)
    {
      $this->_degats = $degats;
    }
  }

  public function setNiveau($niveau)
  {
    $niveau = (int) $niveau;

    // On vérifie que le niveau n'est pas négatif.
    if ($niveau >= 0)
    {
      $this->_niveau = $niveau;
    }
  }

  public function setExperience($exp)
  {
    $exp = (int) $exp;

    // On vérifie que l'expérience est comprise entre 0 et 100.
    if ($exp >= 0 && $exp <= 100)
    {
      $this->_experience = $exp;
    }
  }
}

$surikate = new Personnage();



var_dump($surikate->setNom("surikate"));
var_dump($surikate->nom());