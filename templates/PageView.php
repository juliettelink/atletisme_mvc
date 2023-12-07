<?php 

class PageView {
    // Méthode pour afficher la page principale avec la liste des courses et des coureurs
    public function render($courseList, $coureurList, $scoreCoureurList) {
        include('home.php');  
    }

}