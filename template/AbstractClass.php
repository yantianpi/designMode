<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 17:37
 */
abstract class AbstractClass {

    /**
     * 模板方法，基本方法组装顶层逻辑架构
     *
     */
    final public function templateMethod() {
        $this->templateStart();
        $this->primitiveOperateOne();
        $this->primitiveOperateTwo();
        if ($this->hook()) { // 算法中的可选部分可以采用钩子，让子类根据需要去实现
            $this->selectedOperate();
        }
        $this->templateEnd();
    }

    protected function templateStart() {
        echo "templateMethod start\r\n";
    }
    protected function templateEnd() {
        echo "templateMethod end\r\n";
    }
    protected function hook() {
        echo "hook\r\n";
        return true;
    }
    protected function selectedOperate() {
        echo "selected operate\r\n";
    }
    abstract protected function primitiveOperateOne();
    abstract protected function primitiveOperateTwo();
}