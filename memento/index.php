<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 14:08
 */

include_once('./Caretaker.php');
include_once('./Memento.php');
include_once('./Originator.php');

/*
 * 发起人初始化
 */
$originator = new Originator();
$originator->setStatus('init');
$originator->showStatus();

/*
 * 发起人创建备忘录
 */
$memento = $originator->createMemento();

/*
 * 保存备忘录
 */
$caretaker = new Caretaker();
$caretaker->setMemento($memento);

/*
 * 发起人修改状态
 */
$originator->setStatus('fail');
$originator->showStatus();

/*
 * 发起人通过备忘录还原
 */
$originator->restoreMemento($caretaker->getMemento());
$originator->showStatus();