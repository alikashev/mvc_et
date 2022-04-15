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
            $html .=    "<th></th>";
            $html .=    "<th></th>";
            $html .=    "<th></th>";
            
        $html .=    "</tr>";
        
        foreach ($rows as $row) {
            $id = $row['reservation_id'];

            $html .=    "<tr>";

                foreach ($row as $columns) {
                    $html .=    "<td>".$columns."</td>";
                }
                $html .=    "<td> <a class='readBtn' href='index.php?controller=reservations&action=read&id=$id'>Details</td>";
                $html .=    "<td> <a class='updateBtn' href='index.php?controller=reservations&action=readupdate&id=$id'>Update</td>";
                $html .=    "<td> <a class='deleteBtn' href='index.php?controller=reservations&action=delete&id=$id'>Delete</td>";
                $html .=    "<td> <a class='orderBtn' href=\"index.php?controller=orders&reservation_id=$id\">Bestelling</td>"; 
            $html .=    "</tr>";

        }

        $html .= '</table>';

        return $html;

    }

    public function createDetailsView($results) {
        $html = "";
        foreach ($results[0] as $key => $value) {
            $html .=    "<h2>".$key."</h2>"."<p>".$value."</p>";
        }
        $html .= "<a href=\"index.php\">Terug</a>";
        
        return $html;
    }

    public function createUpdateView($results) {

        var_dump($results);

        $html = "<form action=\"index.php?controller=reservations&action=update\" method=\"POST\">";
        foreach ($results[0] as $key => $value) {
            $html .=    "<label>".$key."</label><br>";
            $html .=    "<input name=\"$key\" type=\"text\"value=".$value."><br>";
        }
        $html .=    "<input type='submit' value='Stuur'><br><br>";
        $html .=    "<form>";
        $html .= "<a href=\"index.php\">Terug</a>";
        
        return $html;

    }
}

?>