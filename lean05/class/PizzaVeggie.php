<?php
class PizzaVeggie extends Pizza{
    public function __construct(){
        $this->name = '素食比萨';
        $this->dough = '饼';
        $this->sauce = '素食';
    }
}