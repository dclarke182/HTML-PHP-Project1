<?php

class Menu extends Dbh {

    protected function updateMenu($foodName, $foodDesc, $price){
        //$stmt = $this->connect()->prepare('UPDATE menu_line (foodName, foodDesc, price) VALUES (?, ?, ?);');
        $stmt = $this->connect()->prepare('UPDATE menu_line SET (foodName, foodDesc, price) VALUES (?, ?, ?) WHERE line_no = 1;');
        
        // if(!$stmt->execute(array($foodName, $foodDesc, $price))){
        //     $stmt = NULL;
        //     header("location: ../Views/Login.php?error=stmtfailed");
        //     exit();
        // }
        $stmt = NULL;
    }

    protected function getMenuData($menuID, $lineNo, $catID) {
        $sql = "SELECT * FROM menu_line WHERE menu_id = ? AND line_no = ? AND cat_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$menuID, $lineNo, $catID]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getMainsData($menuID, $lineNo) {
        $sql = "SELECT * FROM menu_line WHERE menu_id = ? AND line_no = ? AND cat_id = 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$menuID, $lineNo]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getCatIDRowCount($menuID, $lineNo) {
        $sql = "SELECT count(cat_id) FROM menu_line WHERE menu_id = ? AND line_no = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$menuID, $lineNo]);
        $results = $stmt->fetchColumn();
        return $results;
    }
}