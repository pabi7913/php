<?php
setcookie('my_cookie', '重整後才看的到我');
echo $_COOKIE['my_cookie'];
//❶出現Notice
//Notice: Undefined index: my_cookie in C:\xampp\htdocs\php\19_cookie.php on line 3

//❷重整出現設定文字
//重整後才看的到我


