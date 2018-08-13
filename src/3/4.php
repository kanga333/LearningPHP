<?php

for($fahrenheit = -50; $fahrenheit <= 50 ; $fahrenheit += 5) {
    printf("Fahrenheit: %.2f\t",$fahrenheit);
    $celsius = ($fahrenheit - 32) * 5 / 9;
    printf("Celsius: %.2f\n",$celsius);
}
