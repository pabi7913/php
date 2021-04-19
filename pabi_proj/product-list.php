<?php include __DIR__. '/part/config.php'; ?>
<?php
$title = '商品列表';
$pageName = 'product-list';

// 分類
$c_sql = "SELECT * FROM categories WHERE parent_sid=0";
$cate_rows = $pdo->query($c_sql)->fetchAll();

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

$where = ' WHERE 1 ';
if(! empty($cate)){
    $where .= " AND category_sid=$cate ";
}

// 取得總筆數, 總頁數, 該頁的商品資料$title = '商品列表';
$pageName = 'product-list';

// 分類
$c_sql = "SELECT * FROM categories WHERE parent_sid=0";
$cate_rows = $pdo->query($c_sql)->fetchAll();

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$qs = [];
$where = ' WHERE 1 ';
if(! empty($cate)){
    $where .= " AND category_sid=$cate ";
    $qs['cate'] = $cate;
}

// 取得總筆數, 總頁數, 該頁的商品資料

$perPage = 5; // 每一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // 用戶要看第幾頁的商品

$t_sql = "SELECT COUNT(1) FROM products $where ";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows/$perPage);

if($page<1) $page=1;
if($page>$totalPages) $page=$totalPages;

$p_sql = sprintf("SELECT * FROM products $where LIMIT %s, %s ", ($page-1)*$perPage, $perPage);

$rows = $pdo->query($p_sql)->fetchAll();

//echo json_encode([
//        'totalRows' => $totalRows,
//        'rows' => $rows,
//], JSON_UNESCAPED_UNICODE);

//exit;

?>
<?php include __DIR__. '/part/html-head.php'; ?>
<?php include __DIR__. '/part/navbar-product.php'; ?>

<div class="container">
    <div class="row">
        <!-- 搜尋列 -->
        <div class="col-lg-3">
            <div class="btn-group-vertical" role="group" style="width: 100%;" >
                <a type="button" class="btn btn-<?= empty($cate) ? '' : 'outline-' ?>primary" href="?">全部商品</a>
                <?php foreach($cate_rows as $c): ?>
                <a type="button" class="btn btn-<?= $c['sid']==$cate ? '' : 'outline-' ?>primary" href="?cate=<?= $c['sid'] ?>"><?= $c['name'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- 頁碼+商品 -->
        <div class="col-lg-9">
            <!-- 頁碼 -->
            <div class="row">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item <?= $page<=1 ? 'disabled' : '' ?>">
                                <a class="page-link" href="?<?php $qs['page']=$page-1; echo http_build_query($qs); ?>">
                                    <i class="fas fa-arrow-circle-left"></i>
                                </a>
                            </li>
                            <?php for($i=$page-2; $i<=$page+2; $i++):
                                if($i>=1 and $i<=$totalPages):
                                    $qs['page'] = $i;
                                ?>
                                <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query($qs) ?>"><?= $i ?></a>
                                </li>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <li class="page-item <?= $page>=$totalPages ? 'disabled' : '' ?>">
                                <a class="page-link" href="?<?php $qs['page']=$page+1; echo http_build_query($qs); ?>">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- 商品 -->
            <div class="row">
                <?php foreach($rows as $r): ?>
                <div class="col-md-3">
                    <div class="card" data-sid="<?= $r['sid'] ?>">
                        <img src="<?= WEB_ROOT ?>/pabi_proj/imgs/small/<?= $r['book_id'] ?>.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title"><?= $r['bookname'] ?></h6>
                            <p><i class="fas fa-user-friends"></i> <?= $r['author'] ?></p>
                            <p><i class="fas fa-dollar-sign"></i> <?= $r['price'] ?></p>
                            <p>
                                <select class="form-control col-6 " style="display: inline-block; width:auto">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <button class="btn btn-primary add-to-cart col-6"><i class="fas fa-cart-plus"></i></button>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__. '/part/scripts.php'; ?>

<script>
    // 加入購物車
    const addToCartBtn = $('.add-to-cart');
    addToCartBtn.click(function(){
        const card = $(this).closest('.card');
        const pid = card.attr('data-sid');
        const pqty = card.find('select').val();
        // console.log({pid, qty}, card.find('.card-title').text());
        $.get('cart-api.php', {action:'add', pid, pqty}, function(data){
            console.log(data);
        }, 'json');
    })
</script>

<?php include __DIR__. '/part/html-foot.php'; ?>