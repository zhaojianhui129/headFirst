<?php
/**
 * 餐厅菜单迭代器
 * @author qianxun
 *
 */
class DinerMenuIterator implements MenuIterator{
    private $items = array();
    private $position = 0;
    public function __construct(array $items){
        $this->items = $items;
    }
    public function next(){
        $menuItem = $this->items[$this->position];
        $this->position = $this->position + 1;
        return $menuItem;
    }
    public function hasNext(){
        if ($this->position >= count($this->items) || !isset($this->items[$this->position])){
            return false;
        }else{
            return true;
        }
    }
}
