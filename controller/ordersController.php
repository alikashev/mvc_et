<?php 

class ordersController {
    public function __construct() {
        $id = $_REQUEST['id'];
        echo "Orders here".$id;
    }

    public function handleRequest(){}
}


?>