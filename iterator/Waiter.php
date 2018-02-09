<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/9
 * Time: 13:49
 */
class Waiter {
    private $aggregateOne;
    private $aggregateTwo;

    public function __construct(Aggregate $aggregateOne, Aggregate $aggregateTwo) {
        $this->aggregateOne = $aggregateOne;
        $this->aggregateTwo = $aggregateTwo;
    }

    public function printAggregate() {
        $iterator = $this->aggregateOne->createIterator();
        $this->traverse($iterator);
        $iterator = $this->aggregateTwo->createIterator();
        $this->traverse($iterator);
    }

    public function traverse(IteratorAA $iterator) {
        $tmpInt = 0;
        while ($iterator->hasNext()) {
            $tmpInt++;
            $iterator->next();
            if ($tmpInt > 5) {
                break;
            }
        }
    }
}