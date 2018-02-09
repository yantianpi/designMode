<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/9
 * Time: 13:33
 */
class ConcreteAggregateTwo implements Aggregate {

    private $array;

    public function __construct() {
        echo "array construct \n";
    }

    public function addItem() {
        echo "array add item\n";
    }

    public function createIterator() {
        echo "array create iterator";
        return new ArrayIteratorAA($this->array);
    }
}