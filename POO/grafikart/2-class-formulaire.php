<?php
///////////////////////////////////////////////////////////////////////
//  Appeler le constructeur pour instancier un objet
//
//  Pour ajouter des valeur directement dans la methode -- methode("__construct", "__construct")
//
//  Pour assigner directement les valeurs à leurs variables
//
//  La methode pour assigner une variable dans l'objet prendra le dessus
//
//  Dans les class il vaut mieux utiliser RETURN et laisser ECHO pour les vues
//////////////////////////////////////////////////////////////////////

// CLASS




class Form{

    public $data = array();
    public $surround = "p";
    public function __construct($data = array()){
        $this->data = $data;
    }

    public function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }
    public function input($name){
       return $this->surround('<input type="text" name="'.$name.'">');
    }

    public function submit(){
        return $this->surround('<button type="submit">ENVOYER</button>');
    }

}

// OBJECT

$form = new Form(array('username' => 'Roger'));
echo $form->input('username');
echo $form->input('password');
echo $form->submit();



$form = new Form();
echo $form->input('qezrqr');
echo $form->input('qezrqr');
echo $form->input('qezrqr');
echo $form->input('qezrqr');
echo $form->input('qezrqr');
echo $form->input('qezrqr');
echo $form->submit();