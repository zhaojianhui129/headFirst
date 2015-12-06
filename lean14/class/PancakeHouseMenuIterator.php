<?php
/**
 * 煎饼屋菜单迭代器
 * @author qianxun
 *
 */
class PancakeHouseMenuIterator implements MenuIterator{
    private $items = array();
    private $iterator;
    public function __construct(ArrayObject $items){
        $this->items = $items;
        $this->iterator = $this->items->getIterator();
    }
    public function next(){
        $menuItem = $this->iterator->current();
        $this->iterator->next();
        return $menuItem;
    }
    public function hasNext() {
        if ($this->iterator->valid()){
            return true;
        }else{
            return false;
        }
    }
}
