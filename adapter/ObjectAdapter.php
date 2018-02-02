<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/2
 * Time: 18:28
 */
class ObjectAdapter implements Target  {

    private $adaptee;

    public function __construct(Adaptee $adaptee) {
        $this->adaptee = $adaptee;
    }

    /**
     * 委派给adaptee的adapteeFunc方法
     */
    public function interfaceFunc1() {
        $this->adaptee->adapteeFunc();
    }

    /**
     * adaptee没有对应方法，适配器可以自行补充
     */
    public function interfaceFunc2() {
        echo "Adapter function\n";
    }
}