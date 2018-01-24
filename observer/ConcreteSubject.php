<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 15:58
 */
class ConcreteSubject implements Subject{
    private $isPush;
    private $observers;
    private $status;
    private $notifyFlag;
    private $name;

    public function __construct($isPush = true) {
        $this->observers = array();
        $this->status = 'init';
        $this->notifyFlag = false;
        $this->name = "peter's subject";
        $this->isPush = $isPush;
    }

    public function attach(Observer $observer) {
        if (!empty($observer)) {
            array_push($this->observers, $observer);
        }
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

    public function pullNotifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->pullUpdate();
        }
        return true;
    }

    public function pushNotifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->pushUpdate($this->status);
        }
        return true;
    }

    public function setStatus($status) {
        if ($status != $this->status) {
            $this->notifyFlag = true;
        } else {
            $this->notifyFlag = false;
        }
        $this->status = $status;
        if ($this->notifyFlag === true) {
            if ($this->isPush === true) {
                $this->pushNotifyObservers();
            } else {
                $this->pullNotifyObservers();
            }
        }
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getName() {
        return $this->name;
    }
}