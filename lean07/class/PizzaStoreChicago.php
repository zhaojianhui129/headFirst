<?php
class PizzaStoreChicago extends PizzaStore{
    protected function createPizza($item){
        $pizza = null;
        $ingredientFactory = new PizzaIngredientFactoryChicago();
        if ($item == 'cheese'){
            $pizza = new PizzaCheese($ingredientFactory);
            $pizza->setName("芝加哥风格芝士比萨饼");
        } else if ($item == 'clam'){
            $pizza = new PizzaClam($ingredientFactory);
            $pizza->setName("芝加哥风格的蛤蜊披萨");
        }
        return $pizza;
    }
}