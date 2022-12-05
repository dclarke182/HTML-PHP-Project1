<?php

class Restaurant extends Dbh{

    protected function getRestaurantData($restaurantID) {
        $sql = "SELECT * FROM restaurants WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$restaurantID]);
        $results = $stmt->fetchAll();
        return $results;
    }
}