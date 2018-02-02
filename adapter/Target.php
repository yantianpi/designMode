<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/2
 * Time: 18:26
 */
interface Target {

    /**
     * 目标接口向外提供的方法1
     *
     * @return mixed
     */
    public function interfaceFunc1();

    /**
     * 目标接口向外提供的方法2
     *
     * @return mixed
     */
    public function interfaceFunc2();
}