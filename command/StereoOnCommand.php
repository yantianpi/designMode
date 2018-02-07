<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 11:12
 */
class StereoOnCommand implements Command {
    private $stereo;

    public function __construct(Stereo $stereo) {
        $this->stereo = $stereo;
    }

    public function execute() {
        $this->stereo->turnOn();
        $this->stereo->choiceCd();
        $this->stereo->choiceVolume(5);
    }

    public function undoExecute() {
        $this->stereo->turnOff();
    }
}