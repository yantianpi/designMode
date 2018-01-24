<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 15:12
 */
interface Observer {


    /**
     * 取消订阅
     *
     * @return mixed
     */
    public function cancel();

    /**
     * 观察者更新操作 主题推送内容
     *
     * @return mixed
     */
    public function pushUpdate($status);

    /**
     * 观察者更新操作 自己拉取内容
     *
     * @return mixed
     */
    public function pullUpdate();
}