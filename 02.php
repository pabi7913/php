<?php

//echo $_GET['a']+$_GET['b'];

//isset:有存在回傳1
$a = isset($_GET['a']) ? $_GET['a'] : 3;
$b = isset($_GET['b']) ? $_GET['b'] : 4;
//先設空值再傳回值
//empty:有值就不回傳
$a = empty($_GET['a']) ? 3 : intval($_GET['a']);
$b = empty($_GET['b']) ? 4 : intval($_GET['b']);
//等於(新寫法,用這個)
$a = $_GET['a'] ?? 3;
$b = $_GET['b'] ?? 4;
//1. 變數值為NULL的時候，isset會把變數當成不存在；但empty不會
//2. 變數值為0的時候，isset判斷的是變數，所以回傳true；但是empty會把0當成空值，所以也會回傳true
//3. 變數值為空字串的時候，isset判斷的是變數，所以回傳true；empty判斷的是值，所以回傳true


echo intval(3.4536)."<br>";
echo ($a + $b)."<br>";

$c = [ ];

echo empty($c) ? '空的' : '不是';
