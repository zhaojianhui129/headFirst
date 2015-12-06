<?php
/**
 * 最后一种是提供一个Singleton类，然后通过调用getInstance方法，可以为任何一个类生产出一个实例来。
 * @author 建辉
 *
 */
class Singleton{
    static function getInstance($class){
        static $instances = array();
        if (!array_key_exists($class, $instances)){
            $instances[$class] = new $class;
        }
        $instance = $instances[$class];
        return $instance;
    }
}