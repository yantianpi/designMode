<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/26
 * Time: 17:00
 */
include_once('./Singleton.php');

//$obj = new Singleton(); fatal error
//$obj->setName('peter');
//echo $obj->getName();


$obj = Singleton::getInstance();
echo $obj->getName() . "\r\n";
$obj->setName('peter');
echo $obj->getName() . "\r\n";

$objTwo = Singleton::getInstance();
echo $objTwo->getName() . "\r\n";
$obj->setName('alice');
echo $objTwo->getName() . "\r\n";

echo $obj->getName() . "\r\n";