<?php
// More on variables, arithmetic and additional sect functions

// --- Addition ---
$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

// --- Addition ---
$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

// --- Multiple ---
$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

// --- Divide ---
$money = 100;
$money /= 7;
echo $money;
echo '<br>';

// FUNCTION floor or ceiling
$money = 100;
$money /= 7;
$friendly_money = number_format($money,2);
echo $friendly_money;
echo '<br>';

// floor rounds DOWN
$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';
echo '<br>';


// ceil rounds UP
$friendly_money = ceil($money); // rounds down
echo $friendly_money;
echo '<br>';

// --- LOGIC and CLACULATIONS ---
/* circumference of a circle 
circumference = 2 pie r */
$radius ='10';
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo $circumference;
echo '<br>';

// always think logic first
// 22 degrees celcius = what in far?
// far = (C * 9/5) + 32
$celcius = 14;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
echo ''.$friendly_far.' degrees';
echo '<br>';

// logic and the exchange rate
// canadian = 100
// exchagne rate = .79

echo '<br>';

$canada = 1433;
$canada *= .79;
echo $canada;
echo '<p>I have <b>$'.$canada.'</b> American dollars!</p>';
echo '<br>';

$canada = 1433;
$canada *= .79;
$friendly_canada = ceil($canada);
echo '<p>I have <b>$'.$friendly_canada.'</b> American dollars!</p>';
echo '<br>';
