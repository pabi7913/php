<div>
<?php
//設置密碼
$pass='0000';

//md5:sha1:加密成32碼
$md5=md5($pass);
echo"md5:$md5<br>";
echo"md5:$md5<br>";
//sha1:加密成40碼
$sha1=sha1($pass);
echo"sha1:$sha1<br>";
echo"sha1:$sha1<br>";

//★password_hash用這個!就算密碼設一樣,每次顯示都不一樣
echo'password_hash:'.password_hash($pass, PASSWORD_DEFAULT).'<br>';
echo'password_hash:'.password_hash($pass, PASSWORD_DEFAULT).'<br>';
?>
</div>