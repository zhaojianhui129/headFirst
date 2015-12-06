<?php
/**
 * 低咖啡因
 * @author 建辉
 *
 */
class BeverageDecat extends Beverage{
    public function __construct(){
        $this->description = "低咖啡因";
    }
    public function cost(){
        return 1.05;
    }
}