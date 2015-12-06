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
$beverage = new BeverageEspresso();//订一杯浓咖啡,不需要调料，打印出描述与价钱
echo $beverage->getDescription().' $' . $beverage->cost().'<br>';

$beverage2 = new BeverageDarkRoast();//制造一个深焙咖啡
$beverage2 = new CondimentMocha($beverage2);//用摩卡装饰它
$beverage2 = new CondimentMocha($beverage2);//用第二个摩卡装饰它
$beverage2 = new CondimentWhip($beverage2);//用奶泡装饰它
echo $beverage2->getDescription().' $' . $beverage2->cost().'<br>';

$beverage3 = new BeverageHouseBlend();//最后,再来已被调料为豆浆、摩卡、奶泡的综合咖啡
$beverage3 = new CondimentSoy($beverage3);
$beverage3 = new CondimentMocha($beverage3);
$beverage3 = new CondimentWhip($beverage3);
echo $beverage3->getDescription().' $' . $beverage3->cost().'<br>';

echo '<hr>';
echo file_get_contents('./read.txt');