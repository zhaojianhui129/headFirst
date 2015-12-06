<?php
/**
 * 灯泡打开命令
 * @author 建辉
 *
 */
class CommandLightOn implements Command{
    private $light;
    public function __construct(Light $light){
        $this->light = $light;
    }
    public function excute(){
        $this->light->on();
    }
}