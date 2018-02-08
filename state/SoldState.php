<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/8
 * Time: 11:03
 */
/*
 * 售货状态, 分发糖果操作合法
 */
class SoldState implements State {
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    /**
     * 不合法操作
     *
     */
    public function insertQuarter() {
        echo "please wait, we're soon give you a candy\n";
    }

    /**
     * 不合法操作
     *
     */
    public function ejectQuarter() {
        echo "sorry, don't revoke operate, we're soon give you a candy\n";
    }

    /**
     * 不合法操作
     *
     */
    public function turnCrank() {
        echo "you're already turn crank, we're soon give you a candy\n";
    }

    private function returnQuarter() {
        echo "sold out, return quarter\n";
    }

    public function dispense() {
        if ($this->gumballMachine->soldOut()) { // 没有多余糖果，退钱，进入售罄状态
            $this->returnQuarter();
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseCandy();
        }

        if ($this->gumballMachine->soldOut()) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        }
    }
}