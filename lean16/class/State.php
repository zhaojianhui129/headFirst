<?php
/**
 * 状态接口
 * @author qianxun
 *
 */
interface State
{
    /**
     * 投入硬币
     */
    public function insertQuater();
    /**
     * 退出硬币
     */
    public function ejectQuarter();
    /**
     * 转动曲柄
     */
    public function turnCrank();
    /**
     * 发放糖果
     */
    public function dispense();
}
