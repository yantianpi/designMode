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
    public function templateMethod() {
        $this->templateStart();
        $this->primitiveOperateOne();
        $this->primitiveOperateTwo();
        $this->templateEnd();
    }

    protected function templateStart() {
        echo "templateMethod start\r\n";
    }
    protected function templateEnd() {
        echo "templateMethod end\r\n";
    }
    abstract protected function primitiveOperateOne();
    abstract protected function primitiveOperateTwo();
}