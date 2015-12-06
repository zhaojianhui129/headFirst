<?php
/**
 * 灯泡关闭命令
 * @author 建辉
 *
 */
class CommandLightOff implements Command{
    private $light;
    public function __construct(Light $light){
        $this->light = $light;
    }
    public function excute(){
        $this->light->off();
    }
}