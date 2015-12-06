<?php
ini_set('display_errors', "On");
error_reporting(E_ALL | E_STRICT);
//自动加载类
set_include_path( get_include_path() . PATH_SEPARATOR . 'class/' );//设置加载路径
spl_autoload_extensions('.php');//设置加载后缀名
function myAutoload($className){
    require_once $className.'.php';//直接根据类名跟文件关系包含文件
}
spl_autoload_register("myAutoload");//注册自动加载函数

//测试代码开始
$subject = new MySubject();
$observer = new MyObserver();
$subject->attach($observer);
$subject->setValue("这是什么东西啊？");
$subject->setValue("原来这是被观察者呀！");
$subject->setValue("观察者可以观察被观察者，这样被观察者一旦有数据或者有改动就会通知观察者，观察者就会收到通知啦");
$subject->setValue("原来如此，观察者模式定义了对象之间的一对多依赖，这样一来，当一个对象改变状态时，它的所有依赖者都会收到通知并自动更新。");

echo '<hr>';
echo file_get_contents('./read.txt');