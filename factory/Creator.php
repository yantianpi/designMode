<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/25
 * Time: 10:43
 */
abstract class Creator {
    public function orderPizza($type) {
        $pizza = $this->factory($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }

    /**
     * 工厂方法，生产一个具体的产品
     *
     * @param $type
     * @return mixed
     */
    abstract public function factory($type);
}