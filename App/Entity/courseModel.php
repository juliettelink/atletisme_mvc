<?php

require_once('../Database.php');

class CourseModel{

    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function getAllCourses() {
        $result = $this->connexion->query("SELECT * FROM course");

        if ($result) {
            $courses = $result->fetch_all(MYSQLI_ASSOC);
            return $courses;
        } else {
            return array();
        }
    }


}