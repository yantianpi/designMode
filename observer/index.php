<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 16:12
 */
include_once('./Subject.php');
include_once('./Observer.php');
include_once('./ConcreteSubject.php');
include_once('./ConcreteObserver.php');
include_once('./OtherObserver.php');

/*
 * 主题初始化
 */
$subjectPush = new ConcreteSubject(true);

/*
 * 初始化观察者并注册
 */
$observerPeter = new ConcreteObserver('peter', $subjectPush);
$observerAlice = new ConcreteObserver('alice', $subjectPush);
$observerStarof = new ConcreteObserver('starof', $subjectPush);
$observerOther = new OtherObserver('other', $subjectPush);

/*
 * 观察者取消监听
 */
$observerStarof->cancel();
//or $subjectPush->detach($observerStarof);

/*
 * 更改主题状态触发通知
 */
$subjectPush->setStatus('finish');


/***************************************************/
echo "***************************************************\r\n";

/*
 * 主题初始化
 */
$subjectPull = new ConcreteSubject(false);

/*
 * 初始化观察者并注册
 */
$observerPeter = new ConcreteObserver('peter', $subjectPull);
$observerAlice = new ConcreteObserver('alice', $subjectPull);
$observerStarof = new ConcreteObserver('starof', $subjectPull);
$observerOther = new OtherObserver('other', $subjectPull);

/*
 * 观察者取消监听
 */
$observerAlice->cancel();
//or $subjectPull->detach($observerAlice);

/*
 * 更改主题状态触发通知
 */
$subjectPull->setStatus('finish');