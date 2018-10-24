<?php
/**
 * Class Form
 * 
 * Permet de générer un formulaire rapidement et simplement.
 */

class Form{

    /** VARIABLE
     * 
     * @var array Donnée utilisée par le formulaire.
     */
    public $data = array();

    /**
     * @var string Tag utilisé pour entourer les champs.
     */
    public $surround = "p";

    /** FONCTION
     * 
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array()){
        $this->data = $data;
    }

    /**
     * @param string $html Code HTML à entourer.
     * @return string
     */
    public function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }
    /**
     * @param string $name Code HTML à entourer.
     * @return string
     */
    public function input($name){
       return $this->surround('<input type="text" name="'.$name.'">');
    }

    public function submit(){
        return $this->surround('<button type="submit">ENVOYER</button>');
    }

}