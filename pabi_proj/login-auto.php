<?php include __DIR__. '/part/config.php';
// 測試用, 自動登入

// 選擇要登入的ID
$a_sql = "SELECT * FROM `members` 
WHERE `id`=2";
$a_stmt = $pdo->query($a_sql);

$row = $a_stmt->fetch();
$_SESSION['user'] = $row;
print_r($_SESSION['user']);