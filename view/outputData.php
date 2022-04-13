<?php 

class outputData {

    public function createTable($rows) {

        $html =     "<a href='javascript:createForm()'>Maak reservatie aan</a>";
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
            $id = $row['reservation_id'];

            $html .=    "<tr>";

                foreach ($row as $columns) {
                    $html .=    "<td>".$columns."</td>";
                }
                $html .=    "<td> <a class='readBtn' href='index.php?controller=reservations&action=read&id=$id'>Details</td>";
                $html .=    "<td> <a class='updateBtn' href='index.php?controller=reservations&action=read&id=$id'>Update</td>";
                $html .=    "<td> <a class='deleteBtn' href='index.php?controller=reservations&action=delete&id=$id'>Delete</td>";

            $html .=    "</tr>";

        }

        $html .= '</table>';

        return $html;

    }

    public function createDetailsView($results) {

        //html =     "<div class'detailsview'>";

        foreach ($results[0] as $key => $value) {
            $html .=    "<h2>".$key."</h2>"."<p>".$value."</p>";
        }
        //$html .=     "</div";

        $html .= "<a href=\"index.php\">Terug</a>";
        
        return $html;
    }
}

?>