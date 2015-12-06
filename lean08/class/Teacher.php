<?php
/**
 * 对这里例子稍加修改，便可以产生一个通用的方法，只要加到任何你想用到单件的类里，就可以了。
 * @author 建辉
 *
 */
class Teacher{
    function sayHi(){
        return "The teacher smiling and said 'Hello' to U";
    }
    static function getInstance(){
        static $instance;
        if (!isset($instance)){
            $c = __CLASS__;
            $instance = new $c;
        }
        return $instance;
    }
}