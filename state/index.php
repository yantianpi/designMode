<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/8
 * Time: 14:49
 */

include_once('./State.php');
include_once('./NoQuarterState.php');
include_once('./HasQuarterState.php');
include_once('./SoldState.php');
include_once('./WinnerState.php');
include_once('./SoldOutState.php');
include_once('./GumballMachine.php');

$gumballMachine = new GumballMachine(2);

$gumballMachine->insertQuarter();
$gumballMachine->insertQuarter();

$gumballMachine->turnCrank();
$gumballMachine->turnCrank();

$gumballMachine->dispense();
$gumballMachine->dispense();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->dispense();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->dispense();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->dispense();

