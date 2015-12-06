<?php
class PancakeHouseMenu{
    private $menuItems;
    public function __construct(){
        $this->menuItems = new ArrayObject(array());
        $this->addItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99);
        $this->addItem("Regular Pancake Breakfast", "Pancakes with fried eggs,sausage", false, 2.99);
        $this->addItem("Blueberry Pancakes", "Pancakes made with fresh blueberries", true, 3.49);
$this->addItem("Waffles", "Waffles, with your choice of blueberries or strawberries", true, 3.59);
    }
    public function addItem($name, $desc, $vegetarian, $price){
        $menuItem = new MenuItem($name, $desc, $vegetarian, $price);
        $this->menuItems->append($menuItem);
    }
    /* public function getMenuItems(){
        return $this->menuItems;
    } */
    public function createIterator(){
        return new PancakeHouseMenuIterator($this->menuItems);
    }
}