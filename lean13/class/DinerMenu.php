<?php
class DinerMenu{
    const MAX_ITEMS = 6;
    private $numberOfItems = 0;
    private $menuItems;
    public function __construct(){
        $this->menuItems = array();
        $this->addItem("Vegetarian BLT", "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99);
        $this->addItem("BLT", "Bacon with lettuce & tomato on whole wheat", false, 2.99);
        $this->addItem("Soup of the day", "Soup of the day, with a side of potato salad", false, 3.29);
        $this->addItem("Hotdog", "A hot dog,with saurkraut relish, onions, topped with cheese", false, 3.05);
    }
    public function addItem($name, $desc, $vegetarian, $price){
        $menuItem = new MenuItem($name, $desc, $vegetarian, $price);
        if ($this->numberOfItems >= self::MAX_ITEMS){
            echo "抱歉，菜单已经满了！不能再添加菜单项了";
        }else{
            $this->menuItems[] = $menuItem;
            $this->numberOfItems ++;
        }
    }
    /* public function getMenuItems(){
        return $this->menuItems;
    } */
    /**
     * 创建一个迭代器方法
     */
    public function createIterator(){
        return new DinerMenuIterator($this->menuItems);
    }
}