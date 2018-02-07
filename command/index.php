<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/7
 * Time: 13:49
 */
include_once('./Command.php');
include_once('./Light.php');
include_once('./LightOnCommand.php');
include_once('./LightOffCommand.php');
include_once('./Stereo.php');
include_once('./StereoOnCommand.php');
include_once('./StereoOffCommand.php');
include_once('./Fan.php');
include_once('./FanCommand.php');
include_once('./NoCommand.php');
include_once('./MacroCommand.php');
include_once('./Invoker.php');

/*
 * 初始化请求调用者
 */
$invoker = new Invoker();
$invoker->action(); // 执行相关命令
$invoker->undo(); // 撤销相关命令

/*
 * 灯光开命令
 */
$lightOnCommand = new LightOnCommand(new Light('peter'));
$invoker->setCommand($lightOnCommand);
$invoker->action();
$invoker->undo();

/*
 * 灯光关命令
 */
$lightOffCommand = new LightOffCommand(new Light('alice'));
$invoker->setCommand($lightOffCommand);
$invoker->action();
$invoker->undo();

/*
 * 音响开命令
 */
$stereoOnCommand = new StereoOnCommand(new Stereo('starof'));
$invoker->setCommand($stereoOnCommand);
$invoker->action();
$invoker->undo();

/*
 * 风扇命令
 */
$fanCommand = new FanCommand(new Fan('ytp'));
$invoker->setCommand($fanCommand);
$invoker->action();
$invoker->undo();
echo "****************************************************\n";

/*
 * 宏命令
 */
$invoker->setCommand(
    new MacroCommand(
        [
            new LightOnCommand(new Light('new peter')),
            new StereoOnCommand(new Stereo('new starof')),
            new StereoOffCommand(new Stereo('new starof')),
            new FanCommand(new Fan('new ytp'))
        ]
    )
);
$invoker->action();
$invoker->undo();