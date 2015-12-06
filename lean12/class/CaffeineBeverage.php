<?php
abstract class CaffeineBeverage{
    final function prepareRecipe(){
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments()){
            $this->addCondiments();
        }
    }
    abstract function brew();//冲泡
    abstract function addCondiments();//加入调料
    /**
     * 煮沸开水
     */
    public function boilWater(){
        echo 'Boiling water<br>';
    }
    /**
     * 倒进杯子
     */
    public function pourInCup(){
        echo 'Pouring into cup<br>';
    }
    /**
     * 钩子，子类可以覆盖这个方法，但不见得一定要这么做
     * @return boolean
     */
    public function customerWantsCondiments(){
        return true;
    }
}