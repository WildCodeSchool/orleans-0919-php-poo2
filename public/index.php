<?php

use App\Soldier;
use App\Worker;
use App\Army;

require '../vendor/autoload.php';

$worker = new Worker();
echo $worker->say();

$elf = new \App\Elf();
$soldier = new Soldier();
echo $soldier->say();

try {
    $worker->walk('right');
    $worker->walk('bottom');
} catch (LogicException $logicException) {
    echo $logicException->getMessage();
}

echo $soldier->attack();
echo $worker->work();
?>
<hr/>
<?php
$army = new Army();
$army->join($soldier);
$army->join($elf);

foreach ($army->getSoldiers() as $soldierUnit) {
    echo $soldierUnit->say();
    echo $soldierUnit->attack();
}
