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
    case 'update':
        // 2.add
    case 'add':
        if(! empty($pid)){
            if($pqty > 0) {
            // 購物車內已經有這個商品資料
                if(! empty($_SESSION['cart'][$pid])){
                    $_SESSION['cart'][$pid]['quantity'] = $pqty;
                } else {
            // 如果是新加入的商品
                 $sql = "SELECT * FROM products WHERE sid=$pid ";
                 $row = $pdo->query($sql)->fetch();
                if(! empty($row)){
                        $row['quantity'] = $pqty;  // 把數量加入
                        $_SESSION['cart'][$row['sid']] = $row; // 放到購物車裡
                    }
                }
            } else {
                unset($_SESSION['cart'][$pid]); // 移除該項商品
            }
        }
        break;

        // 4.刪除
    case 'delete':
        if(! empty($pid)){
            unset($_SESSION['cart'][$pid]); // 移除該項商品
        }
        break;
    default:
    case 'list':
}

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
