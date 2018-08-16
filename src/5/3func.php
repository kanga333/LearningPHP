<?php

function create_img_tag(string $img_file): string {
    $url = $GLOBALS['location'] . $img_file;
    $img_tag = "<img src=\"$url\">";
    return $img_tag;
}
