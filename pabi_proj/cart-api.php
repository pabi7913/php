<?php include __DIR__. '/part/config.php';

if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

$output = [];

// 1.列表, 2.加入, 3.變更數量, 4.移除項目
// 1.list, 2.add, 3.update, 4.delete

// 動作what
$action = isset($_GET['action']) ? $_GET['action'] : 'list';
// 商品who
$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0;
// 數量how much
$pqty = isset($_GET['pqty']) ? intval($_GET['pqty']) : 0;

// 設定動作
switch($action){
            // ⓿列表
            default:
            case 'list':
                break;
    // ❶加入商品
    case 'add':
        $_SESSION['cart'][$pid] = $pqty;
        break;
        // ❷變更數量
    case 'update':
        break;
        // ❸刪除商品
    case 'delete':
        break;

}
$output['cart'] = $_SESSION['cart'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);