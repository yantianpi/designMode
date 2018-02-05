<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/5
 * Time: 15:12
 */
class SecurityFacade {

    private $cameraOne, $cameraTwo; // 录像机
    private $lightOne, $lightTwo, $lightThree; // 灯
    private $sensor; // 感应器
    private $alarm; // 报警器

    public function __construct() {
        $this->cameraOne = new Camera('one');
        $this->cameraTwo = new Camera('two');

        $this->lightOne = new Light('one');
        $this->lightTwo = new Light('two');
        $this->lightThree = new Light('three');

        $this->sensor = new Sensor('peter');

        $this->alarm = new Alarm('alice');
    }

    public function activate() {
        $this->lightOne->turnOn();
        $this->lightTwo->turnOn();
        $this->lightThree->turnOn();

        $this->cameraOne->turnOn();
        $this->cameraTwo->turnOn();

        $this->sensor->activate();

        $this->alarm->activate();
    }

    public function deactivate() {
        $this->lightOne->turnOff();
        $this->lightTwo->turnOff();
        $this->lightThree->turnOff();

        $this->cameraOne->turnOff();
        $this->cameraTwo->turnOff();

        $this->sensor->deactivate();

        $this->alarm->deactivate();
    }

    public function alarm() {
        $tmpStatus = $this->alarm->getStatus();
        $this->alarm->activate();
        $this->alarm->ring();
        $this->alarm->setStatus($tmpStatus);
    }
}