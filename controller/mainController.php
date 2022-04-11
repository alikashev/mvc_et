<?php

require_once 'ordersController.php';
require_once 'productsController.php';
require_once 'reservationsController.php';

class mainController{

    function __construct() {

    }
    
    public function handleRequest(){

    $controller = isset($_REQUEST["controller"]) ? $controller = $_REQUEST["controller"] : $controller = NULL;

    switch($controller){
        case 'products';
            $this->productsController();
            break;
        case 'reservations';
            $this->reservationsController();
            break;
        case 'orders';
            $this->ordersController();
            break;
        default:
        $this->read();
        }
    }
    
    public function read(){
        require_once 'view/home.php';
    }

    public function productsController(){
        $productscontroller = new productsController;
        $productscontroller->handleRequest();
    }

    public function reservationsController(){
        $reservationscontroller = new reservationsController;
        $reservationscontroller->handleRequest();
    }

    public function ordersController(){
        $orderscontroller = new ordersController;
        $orderscontroller->handleRequest();
    }

    function __destruct() {

    }
}

?> 