<?php

$arr = [];


for($i = 0; $i < 100;$i++) {
    $arr[$i] = array_fill(0,100,2);

}

for($i = 0; $i < 100;$i++) {
    $arr[$i] = [];
    for($j = 0; $j < 100;$j++) {
        $arr[$i][] = rand(300,100000);
    }
}

for($i = 0; $i < 100;$i++) {
    for($j = 0; $j < 100;$j++) {
        echo  $arr[$i][$j];
    }
    echo "<br>";
}



