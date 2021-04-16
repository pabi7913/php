<?php
//先定義要進去的大包包入口(之後都會先找到這個名字的大包包,再往下找)
define('WEB_ROOT', '/php');

require __DIR__. '/__connect_db.php';

session_start();

