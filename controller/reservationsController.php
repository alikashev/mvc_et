<?php

require 'model/reservationsLogic.php';

class reservationsController {

    public function __construct() {
        $this->reservationsLogic = new reservationsLogic;
    }

    public function handleRequest(){

        $action = isset($_REQUEST["action"]) ? $action = $_REQUEST["action"] : $action = NULL;

        switch ($action) {
            case 'create':
                $this->collectCreateReservation();
                break;
            case 'read':
                $this->collectReadReservation();
                break;
            case 'update':
                $this->collectUpdateReservation();
                break;
            case 'delete':
                $this->collectDeleteReservation();
                break;
            default:
                $this->collectReadAllReservations();
                break;
        }

    }

    public function collectReadAllReservations() {
        $obj = $this->reservationsLogic->readAllReservations();
    }

    public function collectCreateReservation() {
        $obj = $this->reservationsLogic->readAllReservation();
    }
}

?>