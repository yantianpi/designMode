<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/8
 * Time: 11:03
 */
/*
 * 售罄状态，不能进行操作
 */
class SoldOutState implements State {
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    /**
     * 不合法操作
     *
     */
    public function insertQuarter() {
        echo "sold out, forbid operate\n";
    }

    /**
     * 不合法操作
     *
     */
    public function ejectQuarter() {
        echo "sold out, forbid operate\n";
    }

    /**
     * 不合法操作
     *
     */
    public function turnCrank() {
        echo "sold out, forbid operate\n";
    }

    /**
     * 不合法操作
     *
     */
    public function dispense() {
        echo "sold out, forbid operate\n";
    }
}