<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 11:00
 */
/*
 * 音响
 */
class Stereo {
    private $name;

    public function __construct($name = '') {
        $this->name = $name;
    }

    public function turnOn() {
        echo "turn on the stereo {$this->name}\n";
    }

    public function turnOff() {
        echo "turn off the stereo {$this->name}\n";
    }

    public function choiceCd() {
        echo "choice cd of stereo {$this->name}\n";
    }

    public function choiceDvd() {
        echo "choice dvd of stereo {$this->name}\n";
    }

    public function choiceRadio() {
        echo "choice radio of stereo {$this->name}\n";
    }

    public function choiceVolume($volume) {
        echo "choice volume {$volume} of stereo {$this->name}\n";
    }
}