<?php

$cities = array(
    'New York' => 8175133,
    'Los Angeles' => 3792621,
    'Chicago' => 2695598,
    'Houston' => 21002663,
    'Philadelphia' => 1526006,
    'Phoenix' => 1445632,
    'San Antonio' => 1327407,
    'San Diego' => 1307402,
    'Dalas' => 1197816,
    'San Jose' => 945942,
);

arsort($cities);
foreach ($cities as $key => $value) {
    printf("%s\t%d\n",$key, $value);
    $sum += $value;
}

printf("------------\n");

ksort($cities);
foreach ($cities as $key => $value) {
    printf("%s\t%d\n",$key, $value);
    $sum += $value;
}
