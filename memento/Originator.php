<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 14:07
 */
class Originator {
    private $status;

    public function __construct() {
        $this->status = '';
    }

    public function showStatus() {
        echo __CLASS__ . ":status => {$this->status}\n";
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function createMemento() {
        return new Memento($this->status);
    }

    public function restoreMemento(Memento $memento) {
        $this->status = $memento->getStatus();
    }
}