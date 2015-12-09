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
$pancakeHouseMenu = new Menu("PANCAKE HOUSE MENU", "早餐");
$dinerMenu = new Menu("DINER MENU", "午餐");
$cafeMenu = new Menu("CAFE MENU", "晚餐");
$dessertMenu = new Menu("DESSERT MENU", "甜点!");

$allMenus = new Menu("ALL MENUS", "All menus combined");

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);
//早餐菜单项
$pancakeHouseMenu->add(new MenuItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99));
$pancakeHouseMenu->add(new MenuItem("Regular Pancake Breakfast", "Pancakes with fried eggs,sausage", false, 2.99));
$pancakeHouseMenu->add(new MenuItem("Blueberry Pancakes", "Pancakes made with fresh blueberries", true, 3.49));
$pancakeHouseMenu->add(new MenuItem("Waffles", "Waffles, with your choice of blueberries or strawberries", true, 3.59));
//午餐菜单项
$dinerMenu->add(new MenuItem("Pasta", "Spaghetti with Marinara Sauce,and a slice of sourdough bread", true, 3.89));
$dinerMenu->add(new MenuItem("Vegetarian BLT", "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99));
$dinerMenu->add(new MenuItem("BLT", "Bacon with lettuce & tomato on whole wheat", false, 2.99));
$dinerMenu->add(new MenuItem("Soup of the day", "Soup of the day, with a side of potato salad", false, 3.29));
$dinerMenu->add(new MenuItem("Hotdog", "A hot dog,with saurkraut relish, onions, topped with cheese", false, 3.05));

$dinerMenu->add($dessertMenu);
//甜点
$dessertMenu->add(new MenuItem("Apple Pie",
    "Apple pie with a flakey crust,toppen with vanilla ice cream",
    true, 1.59));
$dessertMenu->add(new MenuItem("Cheesecake",
    "Apple pie with a flakey crust,toppen with vanilla ice cream",
    true, 1.99));
$dessertMenu->add(new MenuItem("Sorbet",
    "Apple pie with a flakey crust,toppen with vanilla ice cream",
    true, 1.89));
    
//晚餐
$cafeMenu->add(new MenuItem("辣椒炒肉", "很好吃的辣椒炒肉", false, 12.05));
$cafeMenu->add(new MenuItem("跺脚鱼头", "新鲜的鱼头，香喷喷的剁辣椒", false, 23.70));

$waitress = new Waitress($allMenus);
//$waitress->printMenu();
$waitress->printVegetarianMenu();


echo '<hr>';
echo file_get_contents('./read.txt');