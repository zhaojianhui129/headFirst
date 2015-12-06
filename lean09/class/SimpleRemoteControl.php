<?php
/**
 * 简易遥控器
 * @author 建辉
 *
 */
class SimpleRemoteControl{
    private $slot;
    public function __construct(){
        
    }
    public function setCommand(Command $command){
        $this->slot = $command;
    }
    public function buttonWasPressed(){
        $this->slot->excute();
    }
}