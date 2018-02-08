<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/8
 * Time: 11:03
 */
/*
 * 已投币状态，转动曲轴操作合法,吐币操作合法
 */
class HasQuarterState implements State {
    private $gumballMachine;
    public function __construct(GumballMachine $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    /**
     * 不合法操作
     *
     */
    public function insertQuarter() {
        echo "don't insert a quarter again repeated\n";
    }

    /**
     * 已投币状态下，吐币操作合法
     *
     */
    public function ejectQuarter() {
        echo "quarter returned\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    /**
     * 已投币状态下，转动曲轴操作合法
     *
     */
    public function turnCrank() {
        echo "turn crank...\n";
        $tmpInt = rand(1, 10);
        if ($tmpInt == 1) { // 中奖
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    /**
     * 不合法操作
     *
     */
    public function dispense() {
        echo "turn crank first\n";
    }
}