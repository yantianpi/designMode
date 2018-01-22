<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 14:08
 */
class Caretaker {
    private $memento;

    public function __construct() {
    }

    public function setMemento(Memento $memento) {
        $this->memento = $memento;
    }

    public function getMemento() {
        return $this->memento;
    }
}