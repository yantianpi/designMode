<?php

/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 14:26
 */
class NoCommand implements Command {

    public function execute() {
        echo "no command execute\n";
    }

    public function undoExecute() {
        echo "no command undo\n";
    }

}