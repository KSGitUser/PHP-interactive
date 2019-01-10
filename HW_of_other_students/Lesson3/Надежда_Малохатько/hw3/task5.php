<?php
    $arr = [];
    for ($i = 0; $i < rand(5,10); $i++) {
        $arr[$i] = rand(0,100);
    }
    sort($arr);
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . '<br />';
    }
