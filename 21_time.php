<div>
    <?php
    date_default_timezone_set('Asia/Taipei');

    echo date("Y-m-d H:i:s").'<br>';
//    A:2021-04-12 10:26:21
    echo time().'<br>';
//    A:1618194307(秒數)
    echo date("Y-m-d H:i:s", time() + 2592000). '<br>';
//    A:2021-05-12 10:26:53
//    等於 也可以這樣寫(直接運算)
    echo date("Y-m-d H:i:s", time() + 30*24*60*60). '<br>';
//    A:2021-05-12 10:26:53
//
//    strtotime設定字串時間
    $t = strtotime('4/3/21');
    echo $t. '<br>';
//    A:1617379200
    echo date("Y-m-d H:i:s", $t). '<br>';
//    A:2021-04-03 00:00:00
    ?>
</div>