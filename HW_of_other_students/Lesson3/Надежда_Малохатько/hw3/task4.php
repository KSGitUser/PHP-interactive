<?php
$arr = ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'];
$result = array_unique($arr);
for ($i = 0; $i < count($arr); $i++) {
    echo $result[$i] . '<br />';
}
