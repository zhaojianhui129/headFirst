<?php
class PizzaPepperoni extends Pizza{
    public function __construct(){
        $this->name = '意大利辣味香肠比萨';
        $this->dough = '饼';
        $this->sauce = '辣椒酱';
        $this->toppings[] = '香肠';
    }
}