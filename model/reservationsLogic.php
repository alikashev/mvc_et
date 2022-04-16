<?php

require 'model/dataHandler.php';
require 'view/outputData.php';

class reservationsLogic {
    
    public function __construct() {
        $this->dataHandler = new dataHandler("localhost", "mysql", "excellent_taste", "root", "");
        $this->outputData = new outputData();
    }

    public function readAllReservations(){

        try {
            
            $query = "SELECT * FROM reserveringen ";
            $result = $this->dataHandler->readsData($query);
            $results = $result->fetchAll();

            return $this->outputData->createTable($results);

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
            
            $query = "SELECT * FROM reserveringen ";
            $query .= "WHERE reserveringID=$id";
            $result = $this->dataHandler->readsData($query);
            $results = $result->fetchAll();
            return $this->outputData->createDetailsView($results);

        } catch (\Exeption $e) {
            throw $e;
        }
    }

    public function readUpdateReservation($id){

        try {
            
            $query = "SELECT * FROM reserveringen ";
            $query .= "WHERE reserveringID=$id";
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
            
            $query = "DELETE FROM reserveringen ";
            $query .= "WHERE reserveringID=$id";
            $this->dataHandler->deleteData($query);

        } catch (\Exeption $e) {
            throw $e;
        }
    }

}

?>