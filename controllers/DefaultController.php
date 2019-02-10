<?php

require_once "AppController.php";

require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../model/UserMapper.php';


class DefaultController extends AppController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $text = 'Hello there 👋';

        $this->render('index', ['text' => $text]);

        //wyswietlanie sie strony?
    }

    public function login()
    {
        $mapper = new UserMapper();

        $user = null;

        if ($this->isPost()) {

            $user = $mapper->getUser($_POST['email']);


            if(!$user) {
                return $this->render('login', ['message' => ['Email not recognized']]);
            }

            if ($user->getPassword() !== $_POST['password']) {
                return $this->render('login', ['message' => ['Wrong password']]);
            } else {
                $_SESSION["id"] = $user->getEmail();
                $_SESSION["role"] = $user->getRole();
                $_SESSION['username'] = $user->getName();


                $url = "http://$_SERVER[HTTP_HOST]/pai/";
                header("Location: {$url}?page=index");
                exit();
            }
        }

        $this->render('login');
    }

    public function register()
    {
        $userMapper = new UserMapper();
        if ($this->isPost()) {
            if ($userMapper->getUser($_POST['email']) != null)
                return $this->render('register', ['message' => ['This email is already registered']]);
            if ($_POST['password'] != $_POST['password_confirmation'])
                return $this->render('register', ['message' => ['Wrong password']]);
            if ($userMapper->getUsername($_POST['username']))
                return $this->render('register', ['message' => ['This username is already registered']]);
            $userMapper->setUser($_POST['name'], $_POST['email'], md5($_POST['password']));
            $url = "http://$_SERVER[HTTP_HOST]/";
            echo "<script> alert('Zarejestrowano!');
            window.location.href='{$url}?page=index'; </script>";
            exit();
        }
        $this->render('register');
    }


    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('index', ['text' => 'You have been successfully logged out!']);
    }
}