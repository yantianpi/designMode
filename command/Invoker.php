<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 14:19
 */
class Invoker {
    private $command;

    public function __construct() {
        $this->command = new NoCommand();
    }

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function action() {
        $this->command->execute();
    }

    public function undo() {
        $this->command->undoExecute();
    }
}