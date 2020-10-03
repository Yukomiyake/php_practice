<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function kake2($a){
    echo $a * 2;
}
kake2(7);
kake2(100);
kake2(29); echo"\n"
?>

<?php
function nibai($a){
    $b = $a * 2;
    return $b;
}
echo nibai(8); 
echo nibai(3); echo"\n"
?>

<?php
// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
    echo $a += $b;
}
f(2,5);
f(100,50);
f(25,30); echo"\n"
?>

<?php
function ff($a, $b){
    $c = $a += $b;
    return $c;
}
echo ff(2,5);
echo ff(100,50);
echo ff(25,30); echo"\n"
?>

<?php
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function zenkake($arr){
   $num = 1;
   foreach($arr as $value){
       $num *= $value;
   }
   return $num;
}
$arr = array(1,3,5,7,9);
echo zenkake($arr); echo"\n"
?>

<?php
//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a);
     $max_number = $a;
 }

 return $max_number;
 }
$arr = array(1,2,3,4,5);
echo max_array($arr); echo"\n"
?>

<?php
//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags
$str = "<h1>関数の課題</h1>"
."<p>HTMLタグを取り除く</P>";
echo strip_tags($str)
?>

<?php
//array_push
$arr = array(1,3,5,7,9);
array_push($arr,11,13,15);
print_r($arr);
?>

<?php
//array_merge
$ar1 = array("tokyo","kanagawa","chiba","saitama");
$ar2 = array("ibaraki","gumma","tochigi");
$ar3 = array("nagano","niigata") ;
print_r(array_merge($ar1,$ar2,$ar3));
?>

<?php
//time, mktime,date
$timestamp = time() ;
echo $timestamp; echo"\n"
?>

<?php
echo date("Y/m/d H:i:s P l", time()); echo"\n"
?>

<?php
$tm = mktime(01, 01, 01,01,01,2000);
var_dump($tm);
?>



