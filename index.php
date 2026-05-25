<html>
    <body>
<?php

$h = 10;
$w = 20;
/*
2      1    10 - 0  10+1
4      2    10- 1   10+2
6      3    10- 2   10+3
8      4
10    5
12    6
14    7
16    8
18    9
20    10

20 x 10
$w / 2  = 10
9 10
*/
$line = "";
$all_lines ="";

for($i = 1; $i <= $h; $i++){
    $less =  (($w / 2) - ($i - 1));
    $more = (($w / 2) + $i);
    $line="";
    for($j = 0; $j < $w; $j++) {

        if(  $j >= $less && $j <=$more) {
            $line.= "<div>*</div>";
        } else {
            $line.= "<div>&nbsp; </div>";
        }

    }
    $all_lines .= "<div style=\"display: flex\">".$line."</div>";
}
?>
        <?php echo $all_lines; ?>

    </body>
</html>
