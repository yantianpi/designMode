<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/8
 * Time: 10:42
 */
/*
 * 未投币状态，投币操作合法
 */
class NoQuarterState implements State {
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    /**
     * 未投币状态下，投币操作合法
     *
     */
    public function insertQuarter() {
        echo "insert a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    /**
     * 不合法操作
     *
     */
    public function ejectQuarter() {
        echo "have't insert a quarter\n";
    }

    /**
     * 不合法操作
     *
     */
    public function turnCrank() {
        echo "turn crank, but not a quarter\n";
    }

    /**
     * 不合法操作
     *
     */
    public function dispense() {
        echo "need to insert a quarter first\n";
    }
}