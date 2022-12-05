<?php

class Menu extends Dbh {

    protected function getMenuData($menuID) {
        $sql = "SELECT * FROM menu WHERE r_id=$menuID";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0) {
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
}