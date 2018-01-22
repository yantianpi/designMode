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
$subject = new ConcreteSubject();

/*
 * 初始化观察者
 */
$observerPeter = new ConcreteObserver('peter');
$observerAlice = new ConcreteObserver('alice');
$observerStarof = new ConcreteObserver('starof');
$observerOther = new OtherObserver('other');

/*
 * 注册观察者
 */
$subject->attach($observerPeter);
$subject->attach($observerAlice);
$subject->attach($observerStarof);
$subject->attach($observerOther);

/*
 * 移除特定观察者
 */
$subject->detach($observerStarof);

/*
 * 更改主题状态触发通知
 */
$subject->setStatus('finish');

/*
 * 主题主动通知
 */
$subject->notifyObservers();
