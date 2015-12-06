<?php
class MySubject implements SplSubject{
    private $observers,$values;
    public function __construct(){
        $this->observers = array();
        $this->value = array();
    }
    public function attach(SplObserver $observer){
        $this->observers[] = $observer;
    }
    public function detach(SplObserver $observer){
        if ($idx = array_search($observer, $this->observers, true)){
            unset($this->observers[$idx]);
        }
    }
    public function notify(){
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }
    public function setValue($value){
        $this->values[] = $value;
        self::notify();
    }
    public function getValue(){
        return $this->values;
    }
}