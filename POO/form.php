

<?php
class Form{

    public $action;

    public function create($action){
        echo "<form action='".$action."'>";
    }
    public function text($name, $nom){
        echo "<input type='text' name'".$ok." value='".$nom.">";
    }
    public function submit(){
        echo "<input type='submit' value='ENVOER'>";
    }
    public function end(){
        echo "</form>";
    }
}

$form = new Form();
echo $form->create("wwww"); // créer le début du formulaire
echo $form->text("nom", "nom"); // créer un input de type texte avec comme valeur par défaut $nom
echo $form->text(); // créer un input de type texte avec comme valeur par défaut $prenom
echo $form->submit();//Créer un bouton pour soumettre le formulaire se nommant Modifier
echo $form->end(); //fermer le formulaire

?>

