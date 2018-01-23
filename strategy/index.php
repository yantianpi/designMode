<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/23
 * Time: 17:04
 */
include_once('./Strategy.php');
include_once('./ConcreteStrategyOne.php');
include_once('./ConcreteStrategyTwo.php');
include_once('./Context.php');

/*
 * 初始化策略，初始化环境，执行环境中的方法
 */
$strategyObj = new ConcreteStrategyOne();
$contextObj = new Context($strategyObj);
$contextObj->contextMethod();

/*
 * 修改环境中的策略，执行环境中的方法
 */
$contextObj->setStrategy(new ConcreteStrategyTwo());
$contextObj->contextMethod();