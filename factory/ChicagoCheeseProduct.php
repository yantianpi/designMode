<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/25
 * Time: 13:52
 */
class ChicagoCheeseProduct extends Product {

    public function __construct() {
        $this->name = 'chicago cheese pizza';
        $this->dough = 'advanced dough';
        $this->sauce = 'ordinary sauce';
    }

    public function prepare() {
        echo "making {$this->name}\r\n";
        echo "tossing {$this->dough}\r\n";
        echo "adding {$this->sauce}\r\n";
    }
}