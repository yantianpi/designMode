<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/1/25
 * Time: 14:03
 */
include_once('./Creator.php');
include_once('./ChinaCreator.php');
include_once('./ChicagoCreator.php');
include_once('./Product.php');
include_once('./ChinaCheeseProduct.php');
include_once('./ChinaVeggieProduct.php');
include_once('./ChicagoCheeseProduct.php');
include_once('./ChicagoVeggieProduct.php');

$creatorChina = new ChinaCreator();
$creatorChicago = new ChicagoCreator();

$chinaProduct = $creatorChina->orderPizza('cheese');
echo $chinaProduct->getName() . "\r\n";

$chicagoProduct = $creatorChicago->orderPizza('veggie');
echo $chicagoProduct->getName() . "\r\n";

