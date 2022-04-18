<?php 

require_once 'model/productsLogic.php';

class productsController {
    public function __construct() {

        $this->productsLogic = new productsLogic;
    }

    public function handleRequest(){

        $action = isset($_REQUEST["action"]) ? $action = $_REQUEST["action"] : $action = NULL;

        switch($action){
            case 'Create';
                $this->collectCreateProduct();
                break;
            case 'read';
                $this->collectReadProduct();
                break;
            case 'update';
                $this->collectUpdateProduct();
                break;
            case 'delete';
                $this->collectDeleteProduct();
            break;
            default:
                $this->collectReadAllProducts();
            break;
        }
    }

    public function collectReadAllProducts(){
        $obj = $this->productsLogic->readlAllProducts();
        include 'view/main.php';
    }
    public function collectCreateProduct(){}
    public function collectReadProduct(){}
    public function collectUpdateProduct(){}
    public function collectDeleteProduct(){}
}


?>