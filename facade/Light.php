<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/5
 * Time: 15:41
 */
class Light {

    private $name;

    public function __construct($name = '') {
        $this->name = $name;
    }

    /**
     * 开灯
     *
     */
    public function turnOn() {
        echo "turn on the light {$this->name}\n";
    }

    /**
     * 关灯
     *
     */
    public function turnOff() {
        echo "turn off the light {$this->name}\n";
    }

    /**
     * 换灯泡
     *
     */
    public function changeBulb() {
        echo "change the light {$this->name} bulb\n";
    }
}