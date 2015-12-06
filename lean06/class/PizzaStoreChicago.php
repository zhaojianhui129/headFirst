<?php
class PizzaStoreChicago extends PizzaStore{
    public function createPizza($type){
        $pizza = null;
        if ($type == 'cheese'){
            $pizza = new PizzaCheeseChicago();
        } else if ($type == 'pepperoni'){
            $pizza = new PizzaPepperoniChicago();
        } else if ($type == 'clam'){
            $pizza = new PizzaClamChicago();
        } else if ($type == 'veggie'){
            $pizza = new PizzaVeggieChicago();
        }
        return $pizza;
    }
}