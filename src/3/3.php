<?php

$fahrenheit = -50;
while($fahrenheit <= 50 ) {
    printf("Fahrenheit: %.2f\t",$fahrenheit);
    $celsius = ($fahrenheit - 32) * 5 / 9;
    printf("Celsius: %.2f\n",$celsius);
    $fahrenheit += 5;
}
