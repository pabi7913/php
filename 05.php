<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form input</title>
</head>
<body>
<!-- action:打開頁面(預設為自己) method="get"為預設值可寫可不寫-->
<form action="" method="get" > 
<!-- type種類:number可以有三角形點選多或少 -->
<!-- <input type="number" name="score" value="<?= $_GET['score'] ?? '' ?>">
    <input type="submit"> -->

<input type="number" name="a" min="0" max="100"
 value="<?=$_GET["score"] ?? "" ?>">
<input type="submit">



</form>

<?php if(isset($_GET["a"])){
    $a=intval($_GET["a"]);
    echo$a;
}?>

<!-- <?php if(isset($_GET['score'])){
    $s = intval($_GET['score']);
    echo $s;
} ?> -->


</body>
</html>