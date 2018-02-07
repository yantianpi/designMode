<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 10:56
 */
class LightOnCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->turnOn();
    }

    public function undoExecute() {
        $this->light->turnOff();
    }


}