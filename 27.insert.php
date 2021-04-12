<?php include __DIR__. '/part/config.php'; ?>
<?php
$title = '新增資料';
// ★要將每頁設名字
$pageName = 'insert';

?>
<?php include __DIR__. '/part/html-head.php'; ?>
<?php include __DIR__. '/part/navbar-1.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" >

                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>

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
            </div>


        </div>
    </div>
</div>
<?php include __DIR__. '/part/scripts.php'; ?>
<?php include __DIR__. '/part/html-foot.php'; ?>
