<?php
if(isset($_FILES['avatar'])){
    echo json_encode($_FILES['avatar']);
}
/*
{
    "name": "1.png",
    "type": "image/png",
    "tmp_name": "C:\\xampp\\tmp\\php41DA.tmp",
    "error": 0,
    "size": 6401
}
$_FILES['avatar']['name'];

// 上傳多個檔案
{
    "name": [
        "1.png",
        "2.png"
    ],
    "type": [
        "image/png",
        "image/png"
    ],
    "tmp_name": [
        "C:\\xampp\\tmp\\php8136.tmp",
        "C:\\xampp\\tmp\\php8137.tmp"
    ],
    "error": [
        0,
        0
    ],
    "size": [
        6401,
        4928
    ]
}


 */





?>