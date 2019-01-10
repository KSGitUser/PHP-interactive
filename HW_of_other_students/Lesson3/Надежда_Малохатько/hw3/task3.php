<?php
$arr = ['fst', 'snd', 'thd', 'fth'];
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br />';
}
echo '<br /><br />';
echo $arr[rand(0,3)];