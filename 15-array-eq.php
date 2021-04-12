<?php
$a = [
    'name' => 'pabi',
    'age' => 10,
    'gender' => '女',
];

//★設b為a的複製人(複製出來後就各走各的)
$b = $a;

//★這個調整為各自變化,ab彼此都不干擾
$a['name'] = '帕比';
$b['age'] = '20';

//★設c為a的複製人(彼此有連帶關係,會跟著變化)
$c = &$a;
$c['age'] = '50';
$a['name'] = 'AAA';

echo '$a: ';
echo json_encode($a, JSON_UNESCAPED_UNICODE) . '<br>';

echo '$b: ';
echo json_encode($b, JSON_UNESCAPED_UNICODE) . '<br>';

echo '$c: ';
echo json_encode($c, JSON_UNESCAPED_UNICODE) . '<br>';