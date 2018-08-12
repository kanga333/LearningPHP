<?php
$hamburger = 4.95;
$shake = 1.95;
$coke = 0.85;
$tax_rate = 0.075;
$tip_rate = 0.16;

$food_sum = $hamburger * 2 + $shake + $coke;
$tip = $food_sum * $tip_rate;
$tax = $food_sum * $tax_rate;
$sum = $food_sum + $tax_rate + $tip;

printf("%s:\t%.2f\t%d\n", "Hamburger", $hamburger, 2);
printf("%s:\t%.2f\t%d\n", "Shake", $shake, 1);
printf("%s:\t%.2f\t%d\n", "Coke", $coke, 1);
printf("%s:\t%.2f\n", "Tax", $tax);
printf("%s:\t%.2f\n", "Tip", $tip);
printf("%s:\t%.2f\n", "Sum", $sum);
