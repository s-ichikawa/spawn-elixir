<?php

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}
var_dump($arr);

print array_search(max($arr), $arr);

