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
//整段测试代码是命令模式的客户
$remoteControl = new SimpleRemoteControl();//遥控器，调用者
$light = new Light();//对象，请求接收者
$lightOnCommand = new CommandLightOn($light);//创建命令，将命令接收者传给它

$remoteControl->setCommand($lightOnCommand);//把命令传给调用者
$remoteControl->buttonWasPressed();//模拟按下按钮


echo '<hr>';
echo file_get_contents('./read.txt');