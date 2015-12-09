<?php
class Menu extends MenuComponent{
    private $menuComponents,$name,$description;//菜单组件，名称，描述
    public function __construct($name, $desc){
        $this->menuComponents = new ArrayObject();
        $this->name = $name;
        $this->description = $desc;
    }
    public function add(MenuComponent $menuComponent){
        $this->menuComponents->append($menuComponent);
    }
    public function remove(MenuComponent $menuComponent){
        foreach ($this->menuComponents as $index => $v){
            if ($v == $menuComponent){
                $this->menuComponents->offsetUnset($index);
            }
        }
    }
    public function getChild($i){
        return $this->menuComponents->offsetGet($i);
    }
    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }
    public function printf() {
        echo "\n<br>" . $this->getName();
        echo ", ".$this->getDescription() . "<br>";
        echo "----------------------<br>";
        
        $iterator = $this->menuComponents->getIterator();
        while ($iterator->valid()){
            $menuComponent = $iterator->current();
            $menuComponent->printf();
            $iterator->next();
        }
    }
    public function createIterator(){
        return new CompositeIterator($this->menuComponents->getIterator());
    }
}
