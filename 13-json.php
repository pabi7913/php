<?php
$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => '大衛',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ]
];
//json裡不要呼叫無關的東西,會使function失效
echo json_encode($persons);
//加了jsonviewer會直接把中文已unicode顯示,不需要再寫下行,
//但加上這行可以讓讀取速度變快,因為已經指定要轉unicode會自動屏蔽超過範圍的值
echo json_encode($persons, JSON_UNESCAPED_UNICODE);
// header('Content-Type: application/json');


