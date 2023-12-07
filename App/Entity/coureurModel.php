<?php 

require_once('../Database.php');


class CoureurModel{

    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function getAllCoureurs() {
        $result = $this->connexion->query("SELECT * FROM coureur");

        if ($result) {
            $coureurs = $result->fetch_all(MYSQLI_ASSOC);
            return $coureurs;
        } else {
            return array();
        }
    }
    

}
