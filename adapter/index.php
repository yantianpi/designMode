<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/2
 * Time: 18:34
 */
include_once('./Target.php');
include_once('./Adaptee.php');
include_once('./ClassAdapter.php');
include_once('./ObjectAdapter.php');

/*
 * 类适配器
 */
$adapter = new ClassAdapter();
$adapter->interfaceFunc1();
$adapter->interfaceFunc2();


/*
 * 对象适配器
 */
$adaptee = new Adaptee(); // 被适配者
$adapter = new ObjectAdapter($adaptee); // 适配器
/*
 * 适配器按目标接口方式使用被适配者服务
 */
$adapter->interfaceFunc1();
$adapter->interfaceFunc2();