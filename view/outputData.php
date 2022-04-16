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
            $id = $row['reserveringID'];

            $html .=    "<tr>";

                foreach ($row as $columns) {
                    $html .=    "<td>".$columns."</td>";
                }
                $html .=    "<td> <button class='readBtn' onclick=loadPage('index.php?controller=reservations&action=read&id=$id')>Details</button></td>";
                $html .=    "<td> <button class='updateBtn' onclick=loadPage('index.php?controller=reservations&action=readupdate&id=$id')>Update</button></td>";
                $html .=    "<td> <button class='deleteBtn' onclick=loadPage('index.php?controller=reservations&action=delete&id=$id')>Delete</td>";
                $html .=    "<td> <button class='orderBtn' onclick=loadPage(\"index.php?controller=orders&id=$id\")>Bestelling</button></td>";  
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
        $html .=    "<button onclick=loadPage(\"index.php?controller=reservations\")>Terug</button>";
        
        return $html;
    }

    public function createUpdateView($results) {

        $html = "<form action=\"index.php?controller=reservations&action=update\" method=\"POST\">";
        foreach ($results[0] as $key => $value) {
            $html .=    "<label>".$key."</label><br>";
            $html .=    "<input name=\"$key\" type=\"text\"value=".$value."><br>";
        }
        $html .=    "<input type='submit' value='Stuur'><br><br>";
        $html .=    "</form>";

        $html .=    "<button onclick=loadPage(\"index.php?controller=reservations\")>Terug</button>";
        
        return $html;

    }
}

?>