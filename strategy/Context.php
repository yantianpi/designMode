<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/23
 * Time: 17:01
 */
class Context {
    private $strategy;

    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function contextMethod() {
        $this->strategy->algorithmInterface();
    }
}