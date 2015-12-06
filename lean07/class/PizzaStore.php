<?php
abstract class PizzaStore{
    protected abstract function createPizza($type);
    public function orderPizza($type){
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}