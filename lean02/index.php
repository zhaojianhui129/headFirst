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
$weatherData = new WeatherData();//首先建立一个天气数据对象

$displayCurrent = new DisplayCurrentConditions($weatherData);

$weatherData->setMeasurements(80, 65, '30.4f');
$weatherData->setMeasurements(82, 70, '29.2f');
$weatherData->setMeasurements(78, 90, '29.2f');

echo '<hr>';
echo file_get_contents('./read.txt');