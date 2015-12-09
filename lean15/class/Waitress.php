<?php
/**
 * 招待员类
 * @author qianxun
 *
 */
class Waitress{
    private $allMenus;
    public function __construct(MenuComponent $allMenus){
        $this->allMenus = $allMenus;
    }
    public function printMenu(){
        $this->allMenus->printf();
    }
    /**
     * 素食菜单
     */
    public function printVegetarianMenu(){
        $iterator = $this->allMenus->createIterator();
        echo "<br>VEGETARIAN MENU<br>----";
        while ($iterator->valid()){
            $menuComponent = $iterator->current();
            try {
                if ($menuComponent->isVegetarian()){
                    $menuComponent->printf();
                }
            }catch (ErrorException $e){}
            $iterator->next();
        }
    }
}
