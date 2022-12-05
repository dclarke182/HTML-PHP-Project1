<?php

class MenuContr extends Menu{

    public function displayLineNo($menuID) {
        $allData = $this->giveMenuData($menuID);
        foreach($allData as $data){
            $giveLineNo =  $data['line_no'];
        }
    }

    public function displayFoodName($menuID, $lineNo) {
        $allData = $this->getMainsData($menuID, $lineNo);
        foreach($allData as $data){
            echo $data['foodName'];
        }
    }

    public function displayFoodDesc($menuID, $lineNo) {
        $allData = $this->getMainsData($menuID, $lineNo);
        foreach($allData as $data){
            echo $data['foodDesc'];
        }
    }

    public function displayFoodPrice($menuID, $lineNo) {
        $allData = $this->getMainsData($menuID, $lineNo);
        foreach($allData as $data){
            echo $data['price'];
        }
    }

    public function displayFoodPicture($menuID, $lineNo) {
        $allData = $this->getMenuData($menuID, $lineNo);
        foreach($allData as $data){
            echo $data['picture'];
        }
    }

}