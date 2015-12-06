<?php
class SimplePizzaFactory{
    public function createPizza($type){
        $pizza = null;
        if ($type == 'cheese'){
            $pizza = new PizzaCheese();
        } else if ($type == 'pepperoni'){
            $pizza = new PizzaPepperoni();
        } else if ($type == 'clam'){
            $pizza = new PizzaClam();
        } else if ($type == 'veggie'){
            $pizza = new PizzaVeggie();
        }
        return $pizza;
    }
}