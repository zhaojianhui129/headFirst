<?php
/**
 * 主题接口
 * @author 建辉
 *
 */
interface Subject{
    public function registerObserver($o);//观察者注册
    public function removeObserver($o);//观察者删除
    public function notifyObserver();//通知观察者
}