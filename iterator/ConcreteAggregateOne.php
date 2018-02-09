<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/9
 * Time: 11:35
 */
class ConcreteAggregateOne implements Aggregate {

    private $collection;

    public function __construct() {
        echo "collection construct\n";
    }

    public function addItem() {
        echo "collection add item\n";
    }

    public function createIterator() {
        echo "collection create iterator";
        return new CollectionIteratorAA($this->collection);
    }
}