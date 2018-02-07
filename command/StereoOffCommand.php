<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 11:19
 */
/*
 * 音响不需要记录关之前的状态，状态记录撤销的例子参见风扇命令
 */
class StereoOffCommand implements Command {
    private $stereo;

    public function __construct(Stereo $stereo) {
        $this->stereo = $stereo;
    }

    public function execute() {
        $this->stereo->turnOff();
    }

    public function undoExecute() {
        $this->stereo->turnOn();
        $this->stereo->choiceCd();
        $this->stereo->choiceVolume(5);
    }
}