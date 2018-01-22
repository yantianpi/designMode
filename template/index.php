<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/22
 * Time: 17:50
 */
include_once('./AbstractClass.php');
include_once('./ConcreteClass.php');

$class = new ConcreteClass();
$class->templateMethod();