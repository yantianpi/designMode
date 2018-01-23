<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 17:37
 */
class ConcreteClass extends AbstractClass {

    protected function primitiveOperateOne() {
        echo "primitiveOperateOne\r\n";
    }

    protected function primitiveOperateTwo() {
        echo "primitiveOperateTwo\r\n";
    }

    /**
     * 通过父类的钩子方法，对模板算法的可选步骤根据需要修改
     *
     * @return bool
     */
    protected function hook() {
        return false;
    }
}