<?php
$name = "ゆうこ";
if  ($name == "ゆうこ") {
    echo "私はゆうこです。";
} else {
    echo "あなたの名前ではありません。";
}
echo "\n";
$total = 0;
echo $total;
for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";
$fruits = array("peach","melon","kiwi","mango","grape");
for($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i]";
    echo "\n";
}
echo "\n";

$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 ==0) {
    echo $i;
    echo "\n";
    }
}










