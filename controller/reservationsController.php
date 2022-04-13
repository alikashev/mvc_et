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
                $naam = $_REQUEST['naam'];
                $tel = $_REQUEST['tel'];
                $email = $_REQUEST['email'];
                $datum = $_REQUEST['datum'];
                $tafel = $_REQUEST['tafel'];

                $this->collectCreateReservation($naam, $tel, $email, $datum, $tafel);
                break;
            case 'createForm':
                require 'view/form.php';
                break;
            case 'read':
                $id = $_REQUEST['id'];
                $this->collectReadReservation($id);
                break;
            case 'readAll':
                $this->collectReadAllReservation();
                break;
            case 'update':
                $this->collectUpdateReservation();
                break;
            case 'delete':
                $id = $_REQUEST['id'];
                $this->collectDeleteReservation($id);
                break;
            default:
                $this->collectReadAllReservations();
                break;
        }
    }
    public function collectCreateReservation($naam, $tel, $email, $datum, $tafel) {
        $obj = $this->reservationsLogic->createReservation($naam, $tel, $email, $datum, $tafel);
        include 'view/main.php';
    }
    
    public function collectReadAllReservations() {
        $obj = $this->reservationsLogic->readAllReservations();
        include 'view/main.php';
    }

    public function collectDeleteReservation($id) {
        $obj = $this->reservationsLogic->deleteReservation($id);
        include 'view/main.php';
    }

    public function collectReadReservation($id) {
        $obj = $this->reservationsLogic->readReservation($id);
        include 'view/home.php';
    }
}
?>