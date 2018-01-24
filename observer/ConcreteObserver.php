<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 15:58
 */
class ConcreteObserver implements Observer{
    private $name;
    private $subject; //观察者保存主题引用，方便拉取数据，注销监听

    public function __construct($name, Subject $subject) {
        $this->name = $name;
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function cancel() {
        $this->subject->detach($this);
    }

    public function pushUpdate($status) {
        echo __CLASS__ . "({$this->name}) hasing been notified,subject push(status:{$status})\r\n";
    }

    public function pullUpdate() {
        $status = $this->subject->getStatus();
        $name = $this->subject->getName();
        echo __CLASS__ . "({$this->name}) hasing been notified,observer pull(status:{$status},name:{$name})\r\n";
    }

}