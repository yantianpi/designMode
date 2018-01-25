<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/25
 * Time: 11:23
 */
class ChinaVeggieProduct extends Product {

    public function __construct() {
        $this->name = 'china veggie pizza';
        $this->dough = 'ordinary dough';
        $this->sauce = 'ordinary sauce';
    }

    public function prepare() {
        echo "making {$this->name}\r\n";
        echo "tossing {$this->dough}\r\n";
        echo "adding {$this->sauce}\r\n";
    }
}