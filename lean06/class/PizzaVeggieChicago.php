<?php
class PizzaVeggieChicago extends Pizza{
    public function __construct(){
        $this->name = '芝加哥素食比萨';
        $this->dough = '饼';
        $this->sauce = '素食';
    }
    public function cut(){
        echo "把披萨切割成正方形<br>";
    }
}