<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>漸層方格色票</title>
    <style>
        td {
            width: 20px;
            height: 20px;
        }
        
    </style>
</head>
<body>

<table>
<!--先設列-->
<?php for($k=0; $k<16; $k++): ?>
    <tr">
    <!-- 再設攔 -->
    <?php for($i=0; $i<16; $i++): 
    // 多設一個變數
    // RGB(紅綠藍)
        $c = sprintf('#%X0%X', $k, $i);?>
        <!-- 把C設為td -->
            <td style="background-color: <?= $c ?>;">
            &nbsp;
            </td>
            <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>

</body>
</html>