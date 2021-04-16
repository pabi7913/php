<?php
//password_verify密碼驗證
$pass='123456';
$p1=password_hash($pass,PASSWORD_DEFAULT);
$p2=password_hash($pass,PASSWORD_DEFAULT);

//★一定要加雙引號
echo"$p1<br>";
echo"$p2<br>";
echo password_verify($pass,$p1)?'yes<br>':'no<br>';
//前面可放可能是的密碼,讓電腦去做驗證
echo password_verify('56789',$p1)?'yes<br>':'no<br>';
echo password_verify('123456',$p1)?'yes<br>':'no<br>';
?>