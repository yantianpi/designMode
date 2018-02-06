<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/6
 * Time: 15:13
 */
/*
 * 豆浆
 */
class Soy extends CondimentDecorator {
    private $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    /**
     * 豆浆装饰
     *
     * @return string
     */
    public function getDescription() {
        return $this->beverage->getDescription() . ',soy';
    }

    /**
     * 加上豆浆价格
     *
     * @return mixed
     */
    public function cost() {
        return $this->beverage->cost() + 0.5;
    }
}