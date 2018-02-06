<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/6
 * Time: 14:48
 */
abstract class Beverage {
    protected $description;

    public function getDescription() {
        return $this->description;
    }

    public abstract function cost();
}