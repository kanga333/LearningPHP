<?php
$hamburger = 4.95;
$shake = 1.95;
$coke = 0.85;
$tax_rate = 0.075;
$tip_rate = 0.16;

$food_sum = $hamburger * 2 + $shake + $coke;
$tip = $food_sum * $tip_rate;
$sum = $food_sum * (1 + $tax_rate) + $tip;
print $sum;
