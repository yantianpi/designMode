<?php
/**
 * Created by PhpStorm.
 * User: peteryan
 * Date: 2018/2/5
 * Time: 16:16
 */
include_once('./Camera.php');
include_once('./Light.php');
include_once('./Sensor.php');
include_once('./Alarm.php');
include_once('./SecurityFacade.php');


$securityFacace = new SecurityFacade();
$securityFacace->activate();
$securityFacace->deactivate();
$securityFacace->alarm();