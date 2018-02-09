<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/9
 * Time: 11:44
 */
class ArrayIteratorAA implements IteratorAA {

    private $array;
    private $currentIndex;

    public function __construct($array) {
        $this->array = $array;
        $this->currentIndex = 0;
    }

    public function hasNext() {
        echo "array has next\n";
        return true;
    }

    public function next() {
        echo "return array next item\n";
    }

}