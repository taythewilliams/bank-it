<?php

declare(strict_types=1);
require_once 'roll.php';

echo '<h1>Bank-it</h1>';

//$game = new GameStats(5, 0, 0, 0, 1, 0, 0);
$roll = new \Bank\Roll(5, 0, 0, 0, 1, 0, 0);

echo 'die: ';
if (isset($_POST['roll']))
{
    $roll->rollDie();
    var_dump($roll->getDieActual());
} elseif (isset($_POST['notyet']))
{
    echo 'second option';
} else
{
    echo 'nope.';
}

echo '<form method="post"><input type="submit" name="roll"class="button" value="Roll!" />';


//echo '<br />number of rolls: ';
//var_dump($roll->getNumRolls());
//echo '<br />current: ';
//var_dump($roll->getCurrentScore());
//echo '<br />previous: ';
//var_dump($roll->getPreviousScore());
//echo '<br />round number: ';
//var_dump($roll->getRoundNum());
