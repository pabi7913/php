<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--php開始-->
<?php
//定義變數
define('a', 1234);
//等於
$a=1234;
//呼叫

echo a;
echo '<br>';
//等於
echo $a;
echo '<br>-----------------------------<br>';
//檔案位置
echo __DIR__;
echo '<br>';
//檔案位置+檔案名稱
echo __FILE__;
echo '<br>';
//目前行數
echo __LINE__;
echo '<br>-----------------------------<br>';
$A='3';
$B=4;
$C='c';
echo $A+$B;
//A:3+'4'=7;
echo $A+$C;
//A:warning,只會回傳第一個數字
echo '<br>-----------------------------<br>';
$d='name';
//
$$d='apple';
echo $name;
//A:apple(不要這樣用,定義變數會搞混)
echo '<br>';
echo $d;
//A:name
echo '<br>';
echo $$d;
//A:apple
echo '<br>-----------------------------<br>';
$e='pabi';
echo'Hey,$e';
//A:Hey,$e
echo '<br>';
echo"Hey,$e";
//A:Hey,pabi(有帶入變數就要用雙引號!)
echo '<br>';
echo"Hey,$e  123";
//A:Hey,pabi 123
echo '<br>';
echo"Hey,{$e}123";
//A:Hey,pabi123
echo '<br>';
echo"Hey,${e}123";
//A:Hey,pabi123
echo '<br>';
echo"Hey,$e .";
//A:Hey,pabi.
echo '<br>-----------------------------<br>';
//建議都用""包住
$f="abc\ndef\"ghi\\";
$g='abc\ndef\"ghi\\';
$h=`abc\ndef\"ghi\\`;
echo "$f";
//A:abc def"ghi\
echo '<br>';
echo"$g";
//A:abc\ndef\"ghi\
echo '<br>';
echo"$h";
//A:無效,也不會出現錯誤(不要用這個)
echo '<br>-----------------------------<br>';
//不要直接輸出true false,結果會搞混
echo true;
//A:1
echo '<br>';
echo false;
//A:空字串
echo '<br>-----------------------------<br>';
//a++和++a不同
$a=1;
$b=$a++;
echo $b;
//A:b=1;
echo '<br>';
$a=1;
$b=++$a;
echo $b;
//A:b=2;
echo '<br>-----------------------------<br>';
$i=1234;
$j=<<<ABC
<br>
<h1>
123
</h1>
<div style="color:pink;font-size: 3rem">
pabi
</div>
ABC;
echo $i;
echo $j;
數字0

//
$k=3 or $l=4;
echo  $k;echo  $l;
//A:3+notice

//第一個值為0時,才不會出現錯誤,表現
$m=0 or $n=4;
echo  $m;
//A:0
echo '<br>';
echo  $n;
//A:4
echo '<br>';

//前面第一個值為0時,才不會出現錯誤,表現布林值1
$o=0 || $p=4;
echo  $o;
//A:1
echo '<br>';
echo  $p;
//A:4
//echo '<br>-----------------------------<br>';
//$a=isset($_GET['a'])? $_GET['a']:0;
//$a=isset($_GET['b'])? $_GET['b']:0;
//echo $a + $b;