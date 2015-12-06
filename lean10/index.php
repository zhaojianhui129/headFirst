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
$duck = new DuckMallard();//先创建一只鸭子

$turkey = new TurkeyWild();//创建一只火鸡
$turkeyAdapter = new TurkeyAdapter($turkey);//将火鸡包装进一个火鸡适配器中，使它看起来像是一只鸭子

echo "<hr>The Turkey says...<br>";
$turkey->gobble();
$turkey->fly();

echo "<hr>The Duck says...<br>";
testDuck($duck);

echo "<hr>The TurkeyAdapter says...<br>";
testDuck($turkeyAdapter);

function testDuck(Duck $duck){
    $duck->quack();
    $duck->fly();
}

echo '<hr>';
echo file_get_contents('./read.txt');