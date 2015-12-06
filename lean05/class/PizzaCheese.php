<?php
/**
 * 芝士比萨饼
 * @author 建辉
 *
 */
class PizzaCheese extends Pizza{
    public function __construct(){
        $this->name = '芝士比萨饼';
        $this->dough = '薄饼';
        $this->sauce = '番茄酱';
        $this->toppings[] = '意大利reggiano高级干酪';
    }
}