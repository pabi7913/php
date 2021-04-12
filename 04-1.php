<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>
<?=isset($_GET["age"])? "age:{$_GET["age"]}" : "no-age" ?>
</h2>
<!-- 插入if_else -->
<!-- if 輸入的年紀和 -->
<?php if(isset($_GET['age']) && intval($_GET['age']) >= 18): ?>
    <img src="../imgs/great-dane-giant-dog-breeds.jpg" alt="" width="300px">
<?php else: ?>
    <img src="../imgs/GettyImages-588935825.jpg" alt="" width="300px">
<?php endif; ?>  
</body>
</html>