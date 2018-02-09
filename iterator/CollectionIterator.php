<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/9
 * Time: 11:41
 */
class CollectionIteratorAA implements IteratorAA {
    private $collection;

    public function __construct($collection) {
        $this->collection = $collection;
    }

    public function hasNext() {
        echo "collection has next\n";
        return true;
    }

    public function next() {
        echo "return collection next item\n";
    }
}