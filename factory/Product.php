<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/25
 * Time: 10:52
 */
abstract class Product {
    protected $name;
    protected $dough; // 生面团
    protected $sauce; // 作料

    abstract public function prepare();

    public function bake() {
        echo "bake for 15 minutes at 200\r\n";
    }

    public function cut() {
        echo "cut diagonal slice\r\n";
    }

    public function box() {
        echo "packaging\r\n";
    }

    public function getName() {
        echo $this->name . "\r\n";
    }
}