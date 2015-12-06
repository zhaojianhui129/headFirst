<?php
/**
 * 综合咖啡
 * @author 建辉
 *
 */
class BeverageHouseBlend extends Beverage{
    public function __construct(){
        $this->description = "综合咖啡";
    }
    public function cost(){
        return 0.89;
    }
}