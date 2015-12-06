<?php
/**
 * 抽象披萨类
 * @author 建辉
 *
 */
abstract class Pizza{
    protected $name,$dough,$sauce,$veggies,$cheese,$pepperoni,$clam;
    abstract function prepare();
    public function bake(){
        echo "在350度高温下烘烤25分钟<br>";
    }
    public function cut(){
        echo "把披萨切割成斜片形状<br>";
    }
    public function box(){
        echo "把披萨放进加盟披萨店的包装盒中<br>";
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;        
    }
    public function toString(){
        //这里是打印披萨的代码
    }
}