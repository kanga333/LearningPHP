<?php

class Ingredient {
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function setPrice(int $price){
        $this->price = $price;
    }

    public function showInfomation() {
        printf("%s: %d\n",$this->name, $this->price);
    }
}

$suger = new Ingredient("suger", 100);
$suger->showInfomation();

$suger->setPrice(200);
$suger->showInfomation();
