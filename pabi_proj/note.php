<!--★重複資料(列)-->
<?php foreach($_SESSION['cart'] as $v): ?>
    
    <div class="row"></div>

    <?php endforeach; ?>

<!-- ★php放入圖片 -->
 <div>
 <img  class="" alt=""
src="

<!-- 插入路徑 -->
<?= WEB_ROOT ?>/pabi_proj/imgs/small/

<!-- 資料庫名稱 -->
<?= $v['book_id'] ?>

.jpg">
</div>

<?php
// ★清空購物車
// 單獨放在destroy-sess.php
session_start();
session_destroy();

// 重新載入頁面
location.reload();
// 實作(設條件)
// if(){location.reload();}

// 刪除項目unset
unset($_SESSION['cart'][$pid])




