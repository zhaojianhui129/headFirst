<?php
class PizzaStoreNYStyle extends PizzaStore{
    public function createPizza($type){
        $pizza = null;
        if ($type == 'cheese'){
            $pizza = new PizzaCheeseNYStyle();
        } else if ($type == 'pepperoni'){
            $pizza = new PizzaPepperoniNYStyle();
        } else if ($type == 'clam'){
            $pizza = new PizzaClamNYStyle();
        } else if ($type == 'veggie'){
            $pizza = new PizzaVeggieNYStyle();
        }
        return $pizza;
    }
}