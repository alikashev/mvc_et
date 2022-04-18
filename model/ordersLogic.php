<?php

require_once 'model/dataHandler.php';
require_once 'view/outputData.php';

class ordersLogic {
      
    public function __construct() {
        $this->dataHandler = new DataHandler("localhost", "mysql", "excellent_taste", "root", "");
        $this->outputData = new outputData();
    }

    public function createOrderLine($id){

        try {
            
            $query = "SELECT menuitem, prijs FROM menuitems WHERE menuitemcode=$id";
            $result = $this->dataHandler->readsData($query);
            $results = $result->fetchAll();

            return $this->outputData->createOrderView($results);

        } catch (\Exeption $e) {
            throw $e;
        }

    }

    public function createReservation($naam, $tel, $email, $datum, $tafel){

        try {
            
            $query = "INSERT INTO reservations (naam, email, telefoon, datum, tafel) ";
            $query .= "VALUES ('$naam', '$email', '$tel', '$datum', '$tafel')";
            $this->dataHandler->createData($query);

            $result = "Succes";
            return $result;


        } catch (\Exeption $e) {
            throw $e;
        }

    }

    public function readReservation($id){

        try {
            
            $query = "SELECT * FROM reservations ";
            $query .= "WHERE reservation_id=$id";
            $result = $this->dataHandler->readsData($query);
            $results = $result->fetchAll();
            return $this->outputData->createDetailsView($results);

            header('Location: index.php');

        } catch (\Exeption $e) {
            throw $e;
        }
    }

    public function readUpdateReservation($id){

        try {
            
            $query = "SELECT * FROM reservations ";
            $query .= "WHERE reservation_id=$id";
            $result = $this->dataHandler->readsData($query);
            $results = $result->fetchAll();
            return $this->outputData->createUpdateView($results);

        } catch (\Exeption $e) {
            throw $e;
        }
        
    }

    public function updateReservation($id, $naam, $tel, $email, $datum, $tafel){

        try {
            
            $query = "UPDATE reservations ";
            $query .= "SET naam = '$naam', telefoon = '$tel', email = '$email', datum = '$datum', tafel = '$tafel' ";
            $query .= "WHERE reservation_id=$id";
            $this->dataHandler->updateData($query);
            $results = "Succesvol geupdate";
            return $results;

        } catch (\Exeption $e) {
            throw $e;
        }
        
    }
    public function deleteReservation($id){

        try {
            
            $query = "DELETE FROM reservations ";
            $query .= "WHERE reservation_id=$id";
            $this->dataHandler->deleteData($query);

            header('Location: index.php');

        } catch (\Exeption $e) {
            throw $e;
        }
    }

}

?>