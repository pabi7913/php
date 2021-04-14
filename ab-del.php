<?php include __DIR__. '/part/config.php';

$sid = intval($_GET['sid']);

// 設定停止
$come_from = $_SERVER['HTTP_REFERER'] ?? '26.list.php';

if(! empty($sid)) {
    $sql = "DELETE FROM `address_book` WHERE `sid`=$sid ";
    $pdo->query($sql);

}

// 
header('Location: '. $come_from);
