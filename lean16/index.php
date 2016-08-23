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

$gumballMachine = new GumballMachine(6);
print_r($gumballMachine);
echo "<br>";

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

print_r($gumballMachine);
echo "<br>";

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

print_r($gumballMachine);
echo "<br>";
