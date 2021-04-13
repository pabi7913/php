<?php include __DIR__. '/part/config.php'; ?>
<?php
$title = '新增資料';
// ★要將每頁設名字
$pageName = 'insert';

?>
<?php include __DIR__. '/part/html-head.php'; ?>
<?php include __DIR__. '/part/navbar-1.php'; ?>
<style>
form .form-group small.error {
    color: red;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>
                    <!--★novalidat:送出時不檢查,讓正規表達式無效-->
                    <!-- <form name="form1" method="post" novalidate> -->
                    <!--★onsubmit="return false;" onsubmit="event.preventDefault()" 讓表單送不出去  -->
                    <form name="form1" method="post" novalidate onsubmit="checkForm(); return false;">
                        <!-- <form name="form1" method="post" novalidate onsubmit="event.preventDefault()";> -->
                        <div class="form-group">
                            <label for="name">**name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">**email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">**mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" required
                                pattern="09\d{2}-?\d{3}-?\d{3}">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="birthday">birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>
                        <div class="form-group">
                            <label for="address">address</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                            <!-- <input type="text" class="form-control" id="address" name="address"> -->
                        </div>
                        <!-- <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password"
                                   name="password">
                        </div> -->

                        <button type="submit" class="btn btn-primary mx-auto d-block">新增</button>
                        <!-- <button type="submit" class="btn btn-primary" onclick="return confirm('are you sure?')">新增</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__. '/part/scripts.php'; ?>
<script>
const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
const $name = $('#name'),
    $email = $('#email'),
    $mobile = $('#mobile');
const fileds = [$name, $email, $mobile];
// const smalls = [$name.next(), $email.next(), $mobile.next()];

function checkForm() {
    // 回復原來的狀態
    fileds.forEach(el => {
        el.css('border', '1px solid #CCCCCC');
        el.next().text('');
    });
    let isPass = true;
    if ($name.val().length < 2) {
        isPass = false;
        $name.css('border', '1px solid red');
        $name.next().text('請輸入正確的姓名');
    }
    if (!email_re.test($email.val())) {
        isPass = false;
        $email.css('border', '1px solid red');
        $email.next().text('請輸入正確的 email');
    }
    if (!mobile_re.test($mobile.val())) {
        isPass = false;
        $mobile.css('border', '1px solid red');
        $mobile.next().text('請輸入正確的手機號碼');
    }
    if(isPass){
            $.post(
                'ab-insert-api.php',
                $(document.form1).serialize(),
                function(data){
                    if(data.success){
                        alert('資料新增成功');
                    }
                },
                'json'
            )
        }

    }
</script>

<?php include __DIR__. '/part/html-foot.php'; ?>