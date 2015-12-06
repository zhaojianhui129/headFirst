<?php
/**
 * 芝士比萨饼
 * @author 建辉
 *
 */
class PizzaCheeseChicago extends Pizza{
    public function __construct(){
        $this->name = '芝加哥芝士比萨饼';
        $this->dough = '厚饼';
        $this->sauce = '小番茄';
        $this->toppings[] = '意大利白干酪';
    }
    public function cut(){
        echo "把披萨切割成正方形<br>";
    }
}