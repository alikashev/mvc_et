<?php 

require_once 'model/ordersLogic.php';

class ordersController {

    public function __construct() {
        $this->ordersLogic = new ordersLogic;
    }

    public function handleRequest(){

        $action = isset($_REQUEST["action"]) ? $action = $_REQUEST["action"] : $action = NULL;

        switch($action){
            case 'createOrderLine';
            $id = $_REQUEST['id'];
                $this->collectCreateOrderLine($id);
                break;
            case 'reservations';
                $this->reservationsController();
                break;
            case 'orders';
                $this->ordersController();
                break;
            default:
            $this->collectCreateOrderLine();
        }
        
    }
    
    public function collectCreateOrderLine($id){
        $obj = $this->ordersLogic->createOrderLine($id);
        include 'view/side.php';
    }
}


?>