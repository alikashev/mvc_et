<?php 

class outputData {

    public function createTable($rows) {

        $html =     "<table class='outputTable' border='1'>";
        $html .=    "<tr>";
            foreach ($rows[0] as $key => $value) {
                $html .=    "<th>".$key."</th>";
            }
        $html .=    "</tr>";
        
        foreach ($rows as $row) {
            $html .=    "<tr>";
                foreach ($row as $columns) {
                    $html .=    "<td>".$columns."</td>";
                }

                $html .=    "<td><a class='readBtn' href='index.php?controller=reservations&action=read&></td>";
                $html .=    "<td><a class='updateBtn' href='index.php?controller=reservations&action=update></td>";
                $html .=    "<td><a class='deleteBtn' href='index.php?controller=reservations&action=delete></td>";

            $html .=    "</tr>";

            return $html;
        }

    }
}

?>