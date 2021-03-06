<?php

require_once 'controllers/DefaultController.php';
require_once 'controllers/UploadController.php';
require_once 'controllers/PlayerController.php';
require_once 'controllers/AdminController.php';

class Routing
{
    public $routes = [];

    public function __construct()
    {
        $this->routes = [
            'index' => [
                'controller' => 'DefaultController',
                'action' => 'index'
            ],
            'register' => [
                'controller' => 'DefaultController',
                'action' => 'register'
            ],
            'login' => [
                'controller' => 'DefaultController',
                'action' => 'login'
            ],
            'logout' => [
                'controller' => 'DefaultController',
                'action' => 'logout'
            ],
            'upload' => [
                'controller' => 'UploadController',
                'action' => 'upload'
            ],
            'player' => [
                'controller' => 'PlayerController',
                'action' => 'player'

            ],
            'foodtruck' => [
                'controller' => 'DefaultController',
                'action' => 'getFoodTrucks'

            ],
            'foodtruckname' => [
                'controller' => 'DefaultController',
                'action' => 'getFoodTruckName'

            ],
            'admin' => [
                'controller' => 'AdminController',
                'action' => 'index'
            ],
            'admin_users' => [
                'controller' => 'AdminController',
                'action' => 'getUsers'
            ],
            'admin_delete_user' => [
                'controller' => 'AdminController',
                'action' => 'deleteUser'
            ],
            'searcher' => [
            'controller' => 'DefaultController',
            'action' => 'searcher'
             ]


        ];
    }

    public function run()
    {
        $page = isset($_GET['page'])
            && isset($this->routes[$_GET['page']]) ? $_GET['page'] : 'login';

        if ($this->routes[$page]) {
            $class = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $class;
            $object->$action();
        }
    }

}