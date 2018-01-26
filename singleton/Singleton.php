<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/26
 * Time: 16:50
 */
class Singleton {
    private static $instance = null;
    private $status;
    private $name;
    private function __construct() {
    }

    public static function getInstance() {
        if (is_null(self::$instance) || empty(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function __clone() {
        die("singleton can't clone");
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}