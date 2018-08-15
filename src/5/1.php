<?php

function create_img_tag(string $url, string $alt = '', int $height = 0, int $width = 0): string {
    $img_tag_elements = array();
    $img_tag_elements[] = "<img";
    $img_tag_elements[] = "src=\"$url\"";
    if ($alt) {
        $img_tag_elements[] = "alt=\"$alt\"";
    }
    if ($height) {
        $img_tag_elements[] = "height=\"$height\"";
    }
    if ($width) {
        $img_tag_elements[] = "width=\"$width\"";
    }
    $img_tag_elements[] = ">";
    return implode(' ', $img_tag_elements);
}

$minimal = create_img_tag("http://exemple.com");
printf("$minimal\n");

$full = create_img_tag("http://exemple.com", "sample", 10, 10);
printf("$full\n");
