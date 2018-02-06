<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/6
 * Time: 14:56
 */
/*
 * 特浓（浓缩）咖啡，具体组件
 */
class Espresso extends Beverage {
    public function __construct() {
        $this->description = 'Espresso';
    }

    /**
     * 特浓咖啡价格
     *
     * @return float
     */
    public function cost() {
        return 1.99;
    }
}