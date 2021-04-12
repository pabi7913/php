<!--【亂數排列】-->
<?php
//❶push
//★先定義空字串
$a = [];
for($b=1; $b<=5; $b++){
    $a[] = $b;
}

//❷shuffle($)隨機排列, 弄亂
shuffle($a);

//❸implode(,)接成字串
echo implode('-', $a);
?>

