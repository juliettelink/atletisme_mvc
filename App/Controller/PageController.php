<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {
        if (isset($_GET['action'])){
            switch ($_GET['action']) {
                case 'about':
                    // appeler la methode about()
                    $this->about();
                    break;
                case 'home':
                    // charger le controleur home
                    var_dump ('on charge home');
                    break;
                default:
                    //Erreur
                    break;
            }
        }else{
            //Charger le page d'accueil
        }
    }

    protected function about()
    {
        /* on passe un premier param = page à charger
        et un deuxieme un tableau associatif de parametres
        */
        $this->render('page/about',[
            'test' => 'abc',
            'test2' => 'abc2'
        ]);
        
    }

}