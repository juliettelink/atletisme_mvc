<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {
        try{
            if (isset($_GET['action'])){
                switch ($_GET['action']) {
                    case 'about':
                        // appeler la methode about()
                        $this->about();
                        break;
                    case 'home':
                        // charger le controleur home
                        $this->home();
                        break;
                    default:
                        //Erreur
                        throw new \Exception("cette action n'existe pas : " .$_GET['action']);                        
                        break;
                }
            }else{
                throw new \Exception('aucune action détectée');
            }
        }catch(\Exception $e){
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
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

    protected function home()
    {
        /* on passe un premier param = page à charger
        et un deuxieme un tableau associatif de parametres
        */
        $this->render('page/home',[


        ]);
        
    }

}