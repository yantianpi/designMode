<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 15:11
 */
interface Subject {
    /**
     * 注册观察者
     *
     * @param Observer $observer
     * @return mixed
     */
    public function attach(Observer $observer);

    /**
     * 移除观察者
     *
     * @param Observer $observer
     * @return mixed
     */
    public function detach(Observer $observer);

    /**
     * 通知观察者
     *
     * @return mixed
     */
    public function notifyObservers();
}