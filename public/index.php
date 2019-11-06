<?php

use App\Elf;
use App\Map;
use App\Soldier;
use App\Worker;

require '../vendor/autoload.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="map">
    <?php
    $worker = new Worker();
    $elf = new Elf();
    $soldier = new Soldier();

    $map = new Map();
    $map->addUnit($soldier);

    $soldier->walk('right');
    $soldier->walk('top');
    $soldier->walk('top');
    $soldier->walk('right');

    for ($y = $map::MAP_SIZE - 1; $y >= 0; $y--) :
        for ($x = 0; $x < $map::MAP_SIZE; $x++) :
            ?>
            <div class="tile">
                <?php foreach ($map->getUnits() as $unit) :
                    if ($unit->getPosition() === [$x, $y]) : ?>
                        <div class="unit"></div>
                    <?php
                    endif;
                endforeach;
                ?>
            </div>
        <?php
        endfor;
    endfor;
    ?>
</main>
</body>
</html>