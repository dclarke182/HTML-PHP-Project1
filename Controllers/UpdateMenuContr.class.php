<?php

class UpdateMenuContr extends Menu{

    private $foodName;
    private $foodDesc;
    private $price;

    public function __construct($foodName, $foodDesc, $price){
        $this->foodName = $foodName;
        $this->foodDesc = $foodDesc;
        $this->price = $price;
    }

    public function updateMenuOption(){
        $this->updateMenu($this->foodName, $this->foodDesc, $this->price);
    }

}