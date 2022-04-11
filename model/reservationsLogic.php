<?php

require 'model/dataHandler.php';
require 'view/outputData.php';

class reservationsLogic {
    
    public function __construct() {
        $this->dataHandler = new dataHandler("localhost", "mysql", "excellent_taste", "root", "");
        $outputData = new outputData;
    }

    public function readAllReservations(){

        try {
            
            $query = "SELECT * FROM reservations";
            $result = $this->dataHandler->readData($query);
            $results = $result->fetchAll();

            return $this->outputData->createTable($results);

        } catch (\Exeption $e) {
            throw $e;
        }

    }

    public function createReservation(){

        try {
            
            $query = "INSERT INTO reservations (naam, email, telefoon, datum, tafel)";
            $query .= "VALUES ($naam, $email, $telefoon, $datum, $tafel)";


        } catch (\Exeption $e) {
            throw $e;
        }

    }

    public function readReservation(){}
    public function updateReservation(){}
    public function deleteReservation(){}

}

?>