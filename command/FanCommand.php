<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 11:43
 */
class FanCommand implements Command {
    private $fan;
    private $speed;
    public function __construct(Fan $fan) {
        $this->fan = $fan;
        $this->speed = Fan::OFF;
    }

    public function execute() {
        $this->speed = $this->fan->getSpeed();
        $this->fan->medium();
    }

    public function undoExecute() {
        switch ($this->speed) {
            case Fan::OFF:
                $this->fan->off();
                break;
            case Fan::LOW:
                $this->fan->low();
                break;
            case Fan::MEDIUM:
                $this->fan->medium();
                break;
            case Fan::HIGH:
                $this->fan->high();
                break;
        }
    }
}