<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 14:44
 */
/*
 * 宏命令（命令集合）
 */
class MacroCommand implements Command {
    private $commandList;

    public function __construct(Array $commandList) {
        $this->commandList = $commandList;
    }

    public function execute() {
        foreach ($this->commandList as $command) {
            $command->execute();
        }
    }

    public function undoExecute() {
        foreach ($this->commandList as $command) {
            $command->undoExecute();
        }
    }
}