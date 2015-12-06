<?php
class PizzaStoreNY extends PizzaStore{
    protected function createPizza($item){
        $pizza = null;
        $ingredientFactory = new PizzaIngredientFactoryNY();
        if ($item == 'cheese'){
            $pizza = new PizzaCheese($ingredientFactory);
            $pizza->setName("纽约风格芝士比萨饼");
        } else if ($item == 'clam'){
            $pizza = new PizzaClam($ingredientFactory);
            $pizza->setName("纽约风格的蛤蜊披萨");
        }
        return $pizza;
    }
}