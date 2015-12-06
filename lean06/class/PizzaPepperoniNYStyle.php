<?php
class PizzaPepperoniNYStyle extends Pizza{
    public function __construct(){
        $this->name = '纽约风格意大利辣味香肠比萨';
        $this->dough = '饼';
        $this->sauce = '辣椒酱';
        $this->toppings[] = '香肠';
    }
}