<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/25
 * Time: 13:53
 */
class ChicagoVeggieProduct extends Product {
    public function __construct() {
        $this->name = 'chicago veggie pizza';
        $this->dough = 'extra thick crust dough';
        $this->sauce = 'plum tomato sauce';
    }

    public function prepare() {
        echo "making {$this->name}\r\n";
        echo "tossing {$this->dough}\r\n";
        echo "adding {$this->sauce}\r\n";
    }

    /**
     * 重写切片方法
     */
    public function cut() {
        echo "cut square slice\r\n";
    }
}