<?php
/**
 * 观察者接口
 * @author 建辉
 *
 */
interface Observer{
    public function update($temp, $humidity, $pressure);//当主题有变动时将此数据传送给观察者
}