<?php
class PizzaClamChicago extends Pizza{
    public function __construct(){
        $this->name = '芝加哥蛤蜊披萨';
        $this->dough = '饼';
        $this->sauce = '哈利';
    }
    public function cut(){
        echo "把披萨切割成正方形<br>";
    }
}