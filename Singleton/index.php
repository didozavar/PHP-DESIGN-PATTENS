<?php

include "SingletonClass.php";

$singleton = \Singleton\SingletonClass::getInstance();
$singleton->setValue('gosho');
$value = $singleton->getValue();


$secondSingleton = \Singleton\SingletonClass::getInstance();
$secondValue = $secondSingleton->getValue();

if($value === $secondValue)
{
    echo 'SUCCESS !!!';
} else
{
    echo 'FAIL !!!';
}
