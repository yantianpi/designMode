<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 11:14
 */
class LightOffCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOff();
    }

    public function undoExecute() {
        $this->light->turnOn();
    }
}