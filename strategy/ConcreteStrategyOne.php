<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/23
 * Time: 16:57
 */
class ConcreteStrategyOne implements Strategy {
    public function algorithmInterface() {
        echo "algorithm One\r\n";
    }
}