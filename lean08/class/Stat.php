<?php
/**
 * 这是一种最通常的方式，在一个getInstance方法中返回唯一的类实例。
 * 用这种方法就可以创建Singleton的唯一实例了，当然如果是其他语言，如java，C#它们都支持多线程，就有可能两个线程同时初始化，得到两个不同的实例，这是就必须对其进行控制了！php支持真正的多线程，所以就不用考虑这些了。
 * @author 建辉
 *
 */
class Stat{
    private static $uniqueInstance = NULL;
    static function getInstance(){
        if (self::$uniqueInstance == NULL){
            self::$uniqueInstance = new self();
        }
        return self::$uniqueInstance;
    }
    private function __construct(){
        
    }
    private function __clone(){
        
    }
    function sayHi(){
        return "The Class is saying hi to U";
    }
}