<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 14:08
 */
class Memento {
    private $status;

    public function __construct($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}