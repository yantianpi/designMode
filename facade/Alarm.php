<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/5
 * Time: 15:51
 */
class Alarm {
    private $name;
    private $status;

    public function __construct($name = '') {
        $this->name = $name;
        $this->status = 'off';
    }

    /**
     * 开启报警器
     *
     */
    public function activate() {
        echo "activate the alarm {$this->name}\n";
        $this->status = 'on';
    }

    /**
     * 关闭报警器
     *
     */
    public function deactivate() {
        echo "deactivate the alarm {$this->name}\n";
        $this->status = 'off';
    }

    /**
     * 拉响报警器
     *
     */
    public function ring() {
        if ($this->status == 'on') {
            echo "ring the alarm {$this->name}\n";
        } else {
            echo "the alarm {$this->name} not activate\n";
        }
    }

    /**
     * 停掉警报器
     *
     */
    public function stopRing() {
        if ($this->status == 'on') {
            echo "stop the alarm {$this->name}\n";
        } else {
            echo "the alarm {$this->name} not activate\n";
        }
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}