<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/8
 * Time: 10:14
 */
/*
 * 糖果售卖机内部有4+1种状态：未投币、已投币、售货、售罄，还有一种类似售货的状态中奖售货（中奖售货送一颗糖果）。
 * 操作有投币、吐币、转动、分发糖果。
 * 不同状态下有的操作不合法，有的操作合法。
 * 比如在未投币状态下，转动，吐币，分发糖果的动作不合法，只有投币的动作合法。
 */
interface State {

    /**
     * 投币
     */
    public function insertQuarter();

    /**
     * 吐币
     */
    public function ejectQuarter();

    /**
     * 转动
     */
    public function turnCrank();

    /**
     * 分发糖果
     */
    public function dispense();
}