<?php
/**
 * 菜单项对象
 * @author 建辉
 *
 */
class MenuItem{
    private $name,$description,$vegetarian,$price;//名称，叙述，是否素食，价格
    public function __construct($name, $desc, $vegetarian, $price){
        $this->name = $name;
        $this->description = $desc;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }
    /**
     * 获取名称
     */
    public function getName(){
        return $this->name;
    }
    /**
     * 获取描述
     */
    public function getDescription(){
        return $this->description;
    }
    /**
     * 获取价格
     */
    public function getPrice(){
        return $this->price;
    }
    /**
     * 是否素食
     * @return boolean
     */
    public function isVegetarian(){
        return (bool)$this->vegetarian;
    }
}