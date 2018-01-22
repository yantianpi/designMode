<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 16:35
 */
class OtherObserver implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update($status = '') {
        echo __CLASS__ . "({$this->name}) hasing been notified, subject status -> " . $status . "\r\n";
    }
}