<?php
class Bdd{


    public $db_name;
    public $db_user;
    public $db_pass;
    public $db_host;
    public function __construct($db_host = 'localhost', $db_name, $db_user = 'root', $db_pass = ''){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }
}