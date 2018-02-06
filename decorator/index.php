<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/6
 * Time: 15:24
 */
include_once('./Beverage.php');
include_once('./Espresso.php');
include_once('./DarkRoast.php');
include_once('./CondimentDecorator.php');
include_once('./Mocha.php');
include_once('./Soy.php');
include_once('./Whip.php');

function output(Beverage $beverage) {
    echo $beverage->getDescription() . '. cost ' . $beverage->cost() . "\n";
}

/*
 * 具体组件 深焙咖啡
 */
$darkRoast = new DarkRoast();
output($darkRoast);

/*
 * 装饰
 */
$mocha = new Mocha($darkRoast); // 加摩卡
output($mocha);
$whip = new Whip($mocha); // 加奶泡
output($whip);
$whip = new Whip($whip); // 加奶泡
output($whip);

/*
 * 特浓咖啡
 */
$espresso = new Espresso();
$whip = new Whip($espresso);
output($whip);
$whip = new Whip($whip);
output($whip);
$soy = new Soy($whip);
output($soy);