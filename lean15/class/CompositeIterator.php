<?php
class CompositeIterator implements Iterator{
    private $stack = array();
    public function __construct(Iterator $iterator){
        array_push($this->stack, $iterator);
    }
    public function current(){
        
    }
    public function key(){
        
    }
    public function next() {
        if (empty($this->stack)){
            $iterator = array_shift($this->stack);
            if ($iterator instanceof Menu){
                array_push($this->stack, $iterator->createIterator());
            }
            return $iterator;
        }else{
            return null;
        }
    }
    public function rewind(){
        
    }
    public function valid(){
        if ($this->next()){
            return true;
        }else{
            return false;
        }
    }
}
