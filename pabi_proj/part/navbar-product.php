

<?php
    if(! isset($pageName)){
        $pageName = '';
    }
?>

<!--★style可以寫在這裡-->
<style>
nav.navbar .nav-item.active {
    background-color: #5dc0df;
    border-radius: 10px;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportet">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $pageName=='product-list' ? 'acdContentive' : '' ?>">
                    <a class="nav-link" href="product-list.php">商品列表</a>
                </li>
                <li class="nav-item <?= $pageName=='product-list3' ? 'active' : '' ?>">
                    <a class="nav-link" href="product-list3.php">列表(ajax)</a>
                </li>
                <li class="nav-item <?= $pageName=='cart' ? 'active' : '' ?>">
                    <a class="nav-link" href="cart.php">購物車
                        <span class="badge badge-pill badge-danger cart-count">0</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['user'])): ?>
                    <li class="nav-item">
                        <a class="nav-link"><?= htmlentities($_SESSION['user']['nickname']) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">登出</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item <?= $pageName=='login' ? 'active' : '' ?>">
                        <a class="nav-link" href="login.php">登入</a>
                    </li>
                    <li class="nav-item <?= $pageName=='register' ? 'active' : '' ?>">
                        <a class="nav-link" href="register.php">註冊</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>