<?php include __DIR__ . '/part/config.php'; ?>
<?php include __DIR__ . '/part/html-head.php'; ?>
<?php include __DIR__ . '/part/navbar.php'; ?>
<!--⓿container-->
<div class="container">
<!--⓿pre:設置顯示輸入的資料-->
    <div class="row">
        <!--★設一個php-->
        <pre>
            <?php print_r($_POST)?>
        </pre>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--❶★使用上面的pre>php-->
            <form method="POST">

<!--                Email address-->
                <div class="form-group">
                    <!--❷★設名稱:label=input-type=id=name-->
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
<!--                name-->
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="name" class="form-control" id="name" name="name">
                </div>
<!--                password-->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
<!--                Check me out-->
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <!--birthdat-->
                <div class="form-group form-check">
                    <input type="date" class="date" id="date" name="date">
                    <label>date</label>
                </div>
<!--                Submit-->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php include __DIR__ . '/part/scripts.php'; ?>
<?php include __DIR__ . '/part/html-foot.php'; ?>
