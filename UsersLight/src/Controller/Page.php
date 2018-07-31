<?php
namespace Users\Controller;

use Dframe\FileStorage\Storage;
use Dframe\Router\Response;

/**
 * @author Sławomir Kaleta <slaszka@gmail.com>
 */

class Page extends \Controller\Controller
{
    /* Metoda wyświetlajaca okno logowania */
    public function login()
    {

        $user = new \Users\Entity\User($this->baseClass->session->get('id', 0));
        if ($user->isLogged() != true) {  // Sprawdzany czy użytkownik jest zalogowany
            $view = $this->loadView('Index');

            $token = $this->baseClass->token->get('loginToken'); // Generowanie tokena Zabezpieczającego kontroler logowania
            $view->assign('loginToken', $token);
            return $view->render('page/login');
        }

        return $this->router->redirect('');
    }

}
