<?php include __DIR__. '/part/config.php'; ?>
<?php
// ★分頁標籤名字
$title = '分頁標籤名:列表';
// ★要將每頁設名字
$pageName = 'list';

// 設定每一頁出現比數
$perPage = 10;
$t_sql = "SELECT COUNT(1) FROM address_book";
// ❶設定
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows/$perPage);

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if($page<1) $page=1;
if($page>$totalPages) $page=$totalPages;

// $sql = sprintf("SELECT * FROM address_book LIMIT %s, %s", ($page-1)*$perPage, $perPage);

// 反序
$sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s", ($page-1)*$perPage, $perPage);

$rows = $pdo->query($sql)->fetchAll();

?>
<?php include __DIR__. '/part/html-head.php'; ?>
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" /> -->
<?php include __DIR__. '/part/navbar-1.php'; ?>


<!--❷呼叫  -->
<div><?= $totalRows ?></div>
<div><?= $totalPages ?></div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
            <th scope="col"><i class="fas fa-trash-alt"></i></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rows as $r): ?>
        <tr>
            <td><?= $r['sid'] ?></td>
            <td><?= $r['name'] ?></td>
            <td><?= $r['email'] ?></td>
            <td><?= $r['mobile'] ?></td>
            <td><?= $r['birthday'] ?></td>
            <td><?= $r['address'] ?></td>
            <!--★在這裡放上href="javascript:"可以保留連結,也可以不用加JQUERY的連結  -->
            <td class='delete'><a href="javascript:"><i class="far fa-trash-alt"></i></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                <!-- 開頭頁:設定第1頁時不可按 <?= $page<=1 ? 'disabled' : '' ?> -->
                    <li class="page-item <?= $page<=1 ? 'disabled' : '' ?>">
                    <!-- 設定按下去就到前1頁 href="?page=<?= $page-1 ?>-->
                        <a class="page-link" href="?page=<?= $page-1 ?>">
                            <i class="fas fa-arrow-circle-left"></i>
                        </a>
                    </li>

                    <!--  -->
                    <?php for($i=1; $i<=$totalPages; $i++): ?>

                    <!--中間頁碼:設定位在哪1頁就亮哪1頁<?= $i==$page ? 'active' : '' ?>-->
                    <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                    <!--設定按到哪頁就是哪頁 自動生成頁面 href="?page=<?= $i ?>"> <?= $i ?>-->
                        <a class="page-link" href="?page=<?= $i ?>"> <?= $i ?></a>
                    </li>

                    <?php endfor; ?>

                    <!-- 最尾頁:設定最後1頁時不可按 <?= $page>=$totalPages ? 'disabled' : '' ?> -->
                    <li class="page-item <?= $page>=$totalPages ? 'disabled' : '' ?>">
                    <!--  -->
                        <a class="page-link" href="?page=<?= $page+1 ?>">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <?php include __DIR__. '/part/scripts.php'; ?>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->

    <script>
    $('.delete').click(function() {
        $(this).closest('tr').remove();
    });
    </script>

    <?php include __DIR__. '/part/html-foot.php'; ?>