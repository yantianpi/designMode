<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/5
 * Time: 15:46
 */
class Sensor {

    private $name;

    public function __construct($name = '') {
        $this->name = $name;
    }

    /**
     * 启动感应器
     *
     */
    public function activate() {
        echo "activate the sensor {$this->name}\n";
    }

    /**
     * 关闭感应器
     *
     */
    public function deactivate() {
        echo "deactivate the sensor {$this->name}\n";
    }

    /**
     * 感应器触发
     *
     */
    public function trigger() {
        echo "the sensor {$this->name} has been trigged\n";
    }
}