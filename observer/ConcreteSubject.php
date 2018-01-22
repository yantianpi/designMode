<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 15:58
 */
class ConcreteSubject implements Subject{
    private $observers;
    private $status;
    public function __construct() {
        $this->observers = array();
        $this->status = 'init';
    }

    public function attach(Observer $observer) {
        array_push($this->observers, $observer);
    }

    public function detach(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if (!empty($index) && isset($this->observers[$index])) {
            unset($this->observers[$index]);
            return true;
        } else {
            return false;
        }
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->status);
        }
        return true;
    }

    public function setStatus($status) {
        $notifyFlag = false;
        if ($status != $this->status) {
            $notifyFlag = true;
        }
        $this->status = $status;
        if ($notifyFlag === true) {
            $this->notifyObservers();
        }
    }
}