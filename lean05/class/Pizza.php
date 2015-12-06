<?php
abstract class Pizza{
    protected $name,$dough,$sauce;//名字，面团，类型，酱料类型
    protected $toppings = array();//一系列佐料
    public function prepare(){
        echo "正在准备" . $this->name . '<br>';
        echo "揉面团..." . $this->dough;
        echo "添加酱料..." . $this->sauce;
        echo "添加佐料：";
        foreach ($this->toppings as $v){
            echo "  ".$v;
        }
        echo "<br>";
    }
    public function bake(){
        echo "在350度高温下烘烤25分钟<br>";
    }
    public function cut(){
        echo "把披萨切割成斜片形状<br>";
    }
    public function box(){
        echo "把披萨放进加盟披萨店的包装盒中<br>";
    }
    public function getName(){
        return $this->name;        
    }
}