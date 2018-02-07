<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 10:48
 */
/*
 * 抽象接口
 */
interface Command {

    /**
     * 接口方法
     *
     * @return mixed
     */
    public function execute();

    /**
     * 支持撤销操作
     *
     * @return mixed
     */
    public function undoExecute();
}