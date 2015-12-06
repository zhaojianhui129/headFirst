<?php
class PizzaPepperoniChicago extends Pizza{
    public function __construct(){
        $this->name = '芝加哥意大利辣味香肠比萨';
        $this->dough = '饼';
        $this->sauce = '辣椒酱';
        $this->toppings[] = '香肠';
    }
    public function cut(){
        echo "把披萨切割成正方形<br>";
    }
}