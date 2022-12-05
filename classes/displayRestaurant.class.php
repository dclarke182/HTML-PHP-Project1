<?php

class DisplayRestaurant extends Restaurant{

    public function displayRestaurantName($restaurantID) {
        $allData = $this->getRestaurantData($restaurantID);
        foreach($allData as $data){
            echo $data['Name'];
        }
    }

    public function displayRestaurantAddress($restaurantID) {
        $allData = $this->getRestaurantData($restaurantID);
        foreach($allData as $data){
            echo $data['address_line_1'].", ";
            echo $data['address_line_2'].", ";
            echo $data['address_line_3'].", ";
            echo $data['zipcode'];
        }
    }

    public function displayRestaurantNumber($restaurantID) {
        $allData = $this->getRestaurantData($restaurantID);
        foreach($allData as $data){
            echo $data['number'];
        }
    }

    public function displayRestaurantImg($restaurantID) {
        $allData = $this->getRestaurantData($restaurantID);
        foreach($allData as $data){
            echo $data['img_path'];
        }
    }
}