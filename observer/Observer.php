<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 15:12
 */
interface Observer {

    /**
     * 观察者更新操作
     *
     * @return mixed
     */
    public function update($status = '');
}