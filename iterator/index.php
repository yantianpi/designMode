<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/9
 * Time: 13:41
 */

include_once('./IteratorAA.php');
include_once('./ArrayIterator.php');
include_once('./CollectionIterator.php');
include_once('./Aggregate.php');
include_once('./ConcreteAggregateOne.php');
include_once('./ConcreteAggregateTwo.php');
include_once('./Waiter.php');


$aggregateOne = new ConcreteAggregateOne();
$aggregateTwo = new ConcreteAggregateTwo();

$waiter = new Waiter($aggregateOne, $aggregateTwo);

$waiter->printAggregate();