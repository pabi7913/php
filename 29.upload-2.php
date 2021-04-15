<?php
//❶設定完成時的出現結果(預設空白無上傳)
$output=[
    'success'=>false,
    'filenale'=>'',
    'error'=>'no upload',
    'file'=>'',
];

//❷設定上傳的照片只能是png或jpg
$exts=[
    'image/png'=>'.png',
    'image/jpeg'=>'.jpg',
];

//❸
if(isset($_FILES['avatar'])){
    if( empty($exts[$_FILES['avatar']['type']])){
        $output['error'] = '只接受 png, jpg';
    } else {
        $ext = $exts[$_FILES['avatar']['type']];  // 取得副檔名1
        $output['file'] = $_FILES['avatar'];
        $dir = __DIR__. '/img/';  // 存放的路徑
        $fname =  uniqid(). rand(100, 999). $ext;  // 儲存的檔名
        $output['filename'] = $fname;
        if( move_uploaded_file($_FILES['avatar']['tmp_name'], $dir. $fname) ){
            $output['success'] = true;
            $output['error'] = '';
        }
    }
}
header('Content-Type: application/json');
echo json_encode($output);
//❹
//❺
//❻
//❼




/*
 * 檔名會有重複的問題: 使用隨機的檔名
 * 檔案類型: 可以用 mimetype 去篩選
 *
 */