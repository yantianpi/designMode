<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/2
 * Time: 18:40
 */
class ClassAdapter extends Adaptee implements Target {

    public function interfaceFunc1() {
        parent::adapteeFunc();
    }

    public function interfaceFunc2() {
        echo "Adapter function\n";
    }
}