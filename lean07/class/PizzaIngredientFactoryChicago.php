<?php
class PizzaIngredientFactoryChicago implements PizzaIngredientFactory{
    public function createDough(){
        return "面团";
    }
    public function createSauce(){
        return "大蒜番茄酱";
    }
    public function createCheese(){
        return "Reggiano干酪";
    }
    public function createVeggies(){
        $veggies = array(
            "大蒜","洋葱","蘑菇","红椒"
        );
        return $veggies;
    }
    public function createPepperoni(){
        return "切片的意式腊肠";
    }
    public function createClam(){
        return "新鲜蛤蜊";
    }
}