<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 11:27
 */
/*
 * 风扇,记录状态，用于撤销
 */
class Fan {
    const OFF = 0;
    const LOW = 1;
    const MEDIUM = 2;
    const HIGH = 3;
    private $speed;
    private $name;

    public function __construct($name = '') {
        $this->name = $name;
        $this->speed = self::OFF;
    }

    public function high() {
        $this->speed = self::HIGH;
        echo "the speed of fan {$this->name} set high\n";
    }

    public function medium() {
        $this->speed = self::MEDIUM;
        echo "the speed of fan {$this->name} set medium\n";
    }

    public function low() {
        $this->speed = self::LOW;
        echo "the speed of fan {$this->name} set low\n";
    }

    public function off() {
        $this->speed = self::OFF;
        echo "the fan {$this->name} off\n";
    }

    public function getSpeed() {
        return $this->speed;
    }
}