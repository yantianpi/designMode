<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/6
 * Time: 15:20
 */
/*
 * 奶泡
 */
class Whip extends CondimentDecorator {
    private $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    /**
     * 奶泡装饰
     *
     * @return string
     */
    public function getDescription() {
        return $this->beverage->getDescription() . ',whip';
    }

    /**
     * 加上奶泡价格
     *
     * @return mixed
     */
    public function cost() {
        return $this->beverage->cost() + 0.1;
    }
}