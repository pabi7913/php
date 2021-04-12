<?php
//從程式設定時區
echo date('Y-m-d H:i:s');
date_default_timezone_set('asia/taipei');

//從系統端設定時區
//❶echo date('Y-m-d H:i:s');
//❷C:\xampp\php\php.ini 的 date.timezone=Europe/Berlin
// 改成 date.timezone=Asia/Taipei
//❸XAMPP Apache重開


