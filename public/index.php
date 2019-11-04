<?php

require '../vendor/autoload.php';

$legolas = new \App\Elf();
echo $legolas->getSpeed();
$aragorn = new \App\Soldier();
echo $aragorn->getSpeed();

$legolas->walk('left');
$legolas->walk('left');
$legolas->walk('left');
$legolas->walk('right');
$legolas->walk('right');
$legolas->walk('left');
$legolas->walk('bottom');
echo $legolas;