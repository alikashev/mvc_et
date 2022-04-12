<?php 

class outputData {

    public function createTable($rows) {

        $html =     "<a href='javascript:createForm()'>Maak reservatie aab</a>";
        $html .=    "<table class='outputTable'>";
        $html .=    "<tr>";

            foreach ($rows[0] as $key => $value) {
                $html .=    "<th>".$key."</th>";
            }
            $html .=    "<th></th>";
            $html .=    "<th>Acttie</th>";
            $html .=    "<th></th>";
            
        $html .=    "</tr>";
        
        foreach ($rows as $row) {

            $html .=    "<tr>";

                foreach ($row as $columns) {
                    $html .=    "<td>".$columns."</td>";
                }
                $html .=    "<td> <a class='readBtn' href='index.php?controller=reservations&action=update'>Details</td>";
                $html .=    "<td> <a class='updateBtn' href='index.php?controller=reservations&action=update'>Update</td>";
                $html .=    "<td> <a class='deleteBtn' href='index.php?controller=reservations&action=delete'>Delete</td>";

            $html .=    "</tr>";

        }

        $html .= '</table>';

        return $html;

    }

    public function createButton() {
        
        return $html;
    }
}

?>