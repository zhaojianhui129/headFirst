<?php
/**
 * 纽约原料工厂
 * @author 建辉
 *
 */
class PizzaIngredientFactoryNY implements PizzaIngredientFactory{
    public function createDough(){
        return "面团";
    }
    public function createSauce(){
        return "番茄酱料";
    }
    public function createCheese(){
        return "Parmesan干酪";
    }
    public function createVeggies(){
        $veggies = array(
            "茄子","菠菜","黑橄榄"
        );
        return $veggies;
    }
    public function createPepperoni(){
        return "意式腊肠";
    }
    public function createClam(){
        return "蛤蜊";
    }
}