<?php
/**
 * 招待员类
 * @author qianxun
 *
 */
class Waitress{
    private $pancakeHouseMenu;
    private $dinerMenu;
    /**
     * 初始化
     * @param PancakeHouseMenu $pancakeHouseMenu
     * @param DinerMenu $dinerMenu
     */
    public function __construct(PancakeHouseMenu $pancakeHouseMenu, DinerMenu $dinerMenu){
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }
    public function printMenu(){
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();
        echo "菜单<br>----<br>早餐<br>";
        $this->printMenuData($pancakeIterator);
        echo "<br>午餐<br>";
        $this->printMenuData($dinerIterator);
    }
    private function printMenuData($iterator){
        while ($iterator->valid()){
            $menuItem = $iterator->current();
            echo $menuItem->getName() . ", ";
            echo $menuItem->getPrice() . " -- ";
            echo $menuItem->getDescription() . "<br>";
            $iterator->next();
        }
    }
}
