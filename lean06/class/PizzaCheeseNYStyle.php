<?php
/**
 * 芝士比萨饼
 * @author 建辉
 *
 */
class PizzaCheeseNYStyle extends Pizza{
    public function __construct(){
        $this->name = '纽约风格芝士比萨饼';
        $this->dough = '薄饼';
        $this->sauce = '番茄酱';
        $this->toppings[] = '意大利reggiano高级干酪';
    }
}