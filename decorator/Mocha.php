<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/6
 * Time: 15:08
 */
/*
 * 摩卡
 */
class Mocha extends CondimentDecorator {
    private $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    /**
     * 摩卡装饰
     *
     * @return string
     */
    public function getDescription() {
        return $this->beverage->getDescription() . ",mocha";
    }

    /**
     * 加上摩卡价格
     *
     * @return mixed
     */
    public function cost() {
        return $this->beverage->cost() + 0.25;
    }
}