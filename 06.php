<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1">
    <?php for($i=0; $i<10; $i++): ?>
    <tr>
    <?php for($k=0; $k<10; $k++): ?>
        <td>
        <!-- 99乘法表 -->
        <?= sprintf('%s * %s = %s', $i+1, $k+1, ($i+1)*($k+1)); ?>
        </td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>

<pre>
<?php
// 取數%s
printf('%s', 3);
// A:3
// 換行\n
echo "\n";
// 16進位
echo "\n";
printf('%x', 255);
// A:ff
echo "\n";
printf('%X', 255);
// A:FF
echo "\n";
// printf();
?>
</pre>



</body>
</html>