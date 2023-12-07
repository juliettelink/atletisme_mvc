<?php

// require_once('./templates/courses.php');
// require_once('../Entity/coureurModel.php');
// require_once('../Entity/scoreModel.php');
// require_once('./templates/PageView.php');
// require_once('./config.php');
// require_once('./Database.php');

namespace App\Controller;

Class Controller{

    public function route():void
    {
        if (isset($_GET['controller'])){
            switch ($_GET['controller']) {
                case 'page':
                    // charge le controler page
                    $pageController = new PageController();
                    $pageController->route();
                    break;
                case 'course':
                    // charger le controler course
                    var_dump ('on charge CourseController');
                    break;
                default:
                    //Erreur
                    break;
            }
        }else{
            //Charger le page d'accueil
        }
    }

    protected function render(string $path, array $params=[]):void
    {
        $filePath = _ROOTPATH_.'/templates/'.$path. '.php';

        try {
            if(!file_exists($filePath)){
                throw new \Exception("fichier non trouvé : ". $filePath);
            }else{
                // extrait chaque ligne du tableau en variable
                extract($params);
                require_once $filePath;
            }
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }

}




//     public function index(){
//         $db = new Database();
//         $courseModel = New CourseModel($db);
//         $coureurModel = New CoureurModel($db);
//         $scoreModel = New ScoreModel($db);

//         $courseList = $courseModel->getAllCourses();
//         $coureurList = $coureurModel->getAllCoureurs();
//         $scoreCoureurList = $scoreModel->getAllScore();


//         $view = new PageView();
//         $view->render($courseList, $coureurList,$scoreCoureurList);
//     }
// }
  

