<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/25
 * Time: 13:48
 */
class ChicagoCreator extends Creator{

    public function factory($type) {
        switch ($type) {
            case 'cheese':
                return new ChicagoCheeseProduct();
            case 'veggie':
            default:
                return new ChicagoVeggieProduct();
        }
    }
}