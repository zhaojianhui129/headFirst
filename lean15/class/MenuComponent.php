<?php
/**
 * 菜单组件
 * @author qianxun
 *
 */
abstract class MenuComponent{
    /**
     * 添加
     * @param MenuComponent $menuComponent
     * @throws ErrorException
     */
    public function add(MenuComponent $menuComponent){
        throw new ErrorException('不支持此操作');
    }
    public function remove(MenuComponent $menuComponent){
        throw new ErrorException('不支持此操作');
    }
    public function getChild($i){
        throw new ErrorException('不支持此操作');
    }
    public function getName(){
        throw new ErrorException('不支持此操作');
    }
    public function getDescription(){
        throw new ErrorException('不支持此操作');
    }
    public function getPrice(){
        throw new ErrorException('不支持此操作');
    }
    public function isVegetarian(){
        throw new ErrorException('不支持此操作');
    }
    public function printf(){
        throw new ErrorException('不支持此操作');
    }
    abstract function createIterator();
}
