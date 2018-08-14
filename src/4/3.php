<?php

$states = array(
    'NY' => array(
        'New York' => 8175133,
    ),
    'CA' => array(
        'Los Angeles' => 3792621,
        'San Diego' => 1307402,
        'San Jose' => 945942,
    ),
    'IL' => array(
        'Chicago' => 2695598,
    ),
    'TX' => array(
        'Houston' => 21002663,
        'Dalas' => 1197816,
        'San Antonio' => 1327407,
    ),
    'PA' => array(
        'Philadelphia' => 1526006,
    ),
    'AZ' => array(
        'Phoenix' => 1445632,
    ),
);

foreach ($states as $state => $cities) {
    $sum = 0;
    foreach ($cities as $key => $value) {
        printf("%s\t%d\n",$key, $value);
        $sum += $value;
    }
    printf("------------------------\n");
    printf("%s\t%d\n",$state, $sum);
    printf("\n");
}
