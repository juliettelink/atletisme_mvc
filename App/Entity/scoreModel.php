<?php

require_once('../Database.php');


class ScoreModel{

    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function getAllScore() {
        $result = $this->connexion->query("SELECT * FROM score_coureur");

        if (!$result) {
            die("Erreur SQL: " . $this->connexion->error);
        }

        if ($result) {
            $scoreCoureurs = $result->fetch_all(MYSQLI_ASSOC);
            return $scoreCoureurs;
            
        } else {
            return array();
        }
    }
}