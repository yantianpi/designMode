<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/25
 * Time: 11:09
 */
class ChinaCreator extends Creator {
    public function factory($type) {
        switch ($type) {
            case 'cheese':
                return new ChinaCheeseProduct();
            case 'veggie':
            default:
                return new ChinaVeggieProduct();
        }
    }
}