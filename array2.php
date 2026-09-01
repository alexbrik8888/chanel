<?php
/*
$hasTable = ['one'=>1220,'two' => 23455,'test'=>"ffdf",'join'=>"fdsfs"];
$needKey = ['one','two'];
$startTime = microtime(true);
$hasTableCheck =  array_intersect_key($hasTable, array_flip($needKey));
foreach ($hasTableCheck as $key => $item) {
    echo $key."=>".$item."<br>";
}
$executionTime = microtime(true) - $startTime;
// Выводим результат (округленный до 4 знаков)
echo "Время выполнения скрипта: " . $executionTime . " сек.";
$startTime = microtime(true);
$sz = count($needKey);
for($i = 0; $i < $sz;$i++){
    echo $needKey[$i]."=>". $hasTable[$needKey[$i]]."<br>";
}
$executionTime = microtime(true) - $startTime;
// Выводим результат (округленный до 4 знаков)
echo "Время выполнения скрипта: " . $executionTime . " сек.";


$arrTree = [
    'branche_one' => [
        'branche_one' => [1,2,3],
        'branche_two' => [1,2,3],
    ],
    'branche_two' => [
        'branche_one' => [1,2,3],
        'branche_two' => [1,2,3],
        'branche_thee' => [1,2,3],
    ],
    'branche_thee' => [
        'branche_one' => [1,2,3],
    ],
];
$dataSave =[];

$arr =  array_walk_recursive($arrTree,function($value,$key){
   global $dataSave;
    $dataSave[] =$value;
});

print_r($dataSave );
foreach ($arrTree as $key =>$root) {
    foreach ($root as $sublKeyLevel1 => $subLevel1){
        foreach ($subLevel1 as $sublKeyLevel2 => $subLevel2) {
                printf("%s=>%s=> %s == %d",$key,$sublKeyLevel1,$sublKeyLevel2,$subLevel2);
        }
        echo  "</br>";
    }
    echo  "</br>";
}



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


*/