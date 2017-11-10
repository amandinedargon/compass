<?php

namespace compass\Controllers;

use compass\Model\ModelManager;
use compass\Services\GoogleServices;
use GuzzleHttp\Client;

/**
 * Class DefaultController
 * @package compass\Controllers
 */
class DefaultController extends Controller
{
	/**
	 * @return string
	 */
	public function indexAction(){
        $manager = new ModelManager();
        $all = $manager->getallCitations();
        return $this->twig->render('user/homeLoggedin.html.twig', array(
            'alls' => $all
        ));
	}

    public function registerMainAction(){
        return $this->twig->render('user/registerMain.html.twig');
    }

//    public function registerSuccessAction(){
//        return $this->twig->render('user/registerFail.html.twig');
//    }

    public function addCitationAction(){

                $author = htmlspecialchars($_POST['author']);
                $content = htmlspecialchars($_POST['content']);

//                $chapter = ($_POST['chapter']);
                $yo = new GoogleServices();
                $chapter = $yo->convertzipcode($_POST['chapter']);

                $date = htmlspecialchars($_POST['date']);
                $image = htmlspecialchars($_POST['image']);

                // Appel du modele ==> execution de la requete d'enregistrement en base de donné (addCitation())

                $manager = new ModelManager();
                $all1 = $manager->getallCitations();

                $all2 = $manager->addCitation($author, $chapter, $content, $date, $image);

                return $this->twig->render('user/homeLoggedin.html.twig', array(
                'alls' => $all1
                ));

    }

//    public function registerFailAction(){
//        return $this->twig->render('user/registerFail.html.twig');
//    }

//    public function loginMainAction(){
//        return $this->twig->render('user/loginMain.html.twig');
//    }

//    public function loginSuccessAction(){
//        return $this->twig->render('user/loginSuccess.html.twig');
//    }

    public function adminAction(){
        $manager = new ModelManager();
        $all = $manager->getallCitations();
        return $this->twig->render('user/homeAdmin.html.twig', array(
            'alls' => $all
        ));

    }

}