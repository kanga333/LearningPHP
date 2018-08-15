<?php

function web_coler(int $red, int $green, int $blue): string {
    $color = sprintf("#%'02x%'02x%'02x", $red, $green, $blue);
    return $color;
}

$color = web_coler(255,0,255);
printf("$color\n");
