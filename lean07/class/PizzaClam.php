<?php
class PizzaClam extends Pizza{
    protected $ingredientFactory;
    public function __construct(PizzaIngredientFactory $ingredientFactory){
        $this->ingredientFactory = $ingredientFactory;
    }
    public function prepare(){
        echo "正在准备" . $this->name . '<br>';
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }
}