<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/6
 * Time: 14:56
 */
/*
 * 深焙咖啡，具体组件
 */
class DarkRoast extends Beverage {
    public function __construct() {
        $this->description = 'dark roast';
    }

    /**
     * 深焙咖啡价格
     *
     * @return float
     */
    public function cost() {
        return 0.89;
    }
}