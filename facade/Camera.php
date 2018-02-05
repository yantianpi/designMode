<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/5
 * Time: 15:35
 */
class Camera {

    private $name;

    public function __construct($name = '') {
        $this->name = $name;
    }

    /**
     * 打开录像机
     *
     */
    public function turnOn() {
        echo "turn on the camera {$this->name}\n";
    }

    /**
     * 关闭录像机
     *
     */
    public function turnOff() {
        echo "turn off the camera {$this->name}\n";
    }

    /**
     * 录像机转动
     *
     * @param $degrees
     */
    public function rotate($degrees) {
        echo "rotating the camera {$this->name} by {$degrees} degrees\n";
    }
}