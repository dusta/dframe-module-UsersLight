<?php
namespace Users\Controller;

use Dframe\Config;
use Dframe\Router\Response;

/**
 * @author Sławomir Kaleta <slaszka@gmail.com>
 */

class User extends \Controller\Controller
{

    public function login()
    {

        if (isset($_POST) and !empty($_POST)) {

            if (!$this->baseClass->token->isValid('loginToken', (isset($_POST['token']) ? $_POST['token'] : null), true)) {
                return $this->baseClass->msg->add('e', 'Formularz wygasł.', 'page/login');
            }

            $users = Config::load('users', __DIR__ . '/../Config/');

            foreach ($users->get('users') as $key => $value) {
                if ($value['username'] == $_POST['username'] and $value['password'] == md5($_POST['password'])) {
                    $this->baseClass->session->register();
                    $this->baseClass->session->set('id', $value['id']);
                    $this->baseClass->session->set('username', $value['username']);
                    return $this->router->redirect('page/index');
                }
            }

            return $this->baseClass->msg->add('e', 'Not Found', 'page/login');

        }

        return $this->router->redirect('page/login');
    }

    public function logout()
    {
        $this->baseClass->session->end();
        //usuwanie cookie z last page
        unset($_COOKIE['currentPage']);
        setcookie("currentPage", "", time() - 3600, "/");
        return $this->router->redirect('page/login');
    }

}
