<?php include __DIR__. '/part/config.php'; ?>
<!--⓿ 放在最前面 -->
<?php
$title = '登入login';
if(isset($_POST['account']) and isset($_POST['password'])){
    if($_POST['account']=='pabi' and $_POST['password']=='0000'){
        $_SESSION['account'] = 'pabi';
    } else {
        $msg = '帳號或密碼錯誤';
    }
}
?>

<?php include __DIR__. '/part/html-head.php'; ?>
<?php include __DIR__. '/part/navbar.php'; ?>
<!--❷插入一個表單-->
<div class="container">
    <div class="row">
    <!--  -->
        <?php if(isset($msg)): ?>
            <div class="alert alert-danger" role="alert">
                <?= $msg ?>
            </div>
            <!--  -->
        <?php endif; ?>
        <!--  -->
        <?php if(isset($_SESSION['account'])): ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['account']. ' 您好' ?>
            </div>
            <div><a href="23_login.php">登出</a></div>
            <!--  -->
        <?php else: ?>
            <div class="col-md-6">
                <form name="form1" method="post">
                    <div class="form-group">
                        <label for="account">account address</label>
                        <input type="text" class="form-control" id="account" name="account">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password"
                               name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php //include __DIR__. '/part/scripts.php'; ?>
<?php //include __DIR__. '/part/html-foot.php'; ?>
