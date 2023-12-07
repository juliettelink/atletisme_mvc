<?php

require_once('config.php');

class Database
{ 
    private $connexion;

    public function __construct()
    {
        $this->connexion = new mysqli(__DB_HOST__,__DB_USER__, __DB_PASSWORD__, __DB_NAME__);

        if ($this->connexion->connect_error){
            die("La connexion à la base de donnée à échoué :" . $this->connexion->connect_error);

        }
    }

    public function query($sql) {
        return $this->connexion->query($sql);
    }

    

    // Méthode pour effectuer une insertion dans la table course_coureur
    // public function insererCourseCoureur($idCoureur, $idCourse, $positionCoureur)
    // {
    //     $stmt = $this->connexion->prepare("INSERT INTO course_coureur (id_coureur, id_course, position_coureur) VALUES (?, ?, ?)");
    //     $stmt->bind_param("iii", $idCoureur, $idCourse, $positionCoureur);

    //     $stmt->execute();
    //     $stmt->close();
    //}


    public function fermerConnexion()
    {
        $this->connexion->close();
    }
}

?>
