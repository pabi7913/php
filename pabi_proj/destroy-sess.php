<?php
// 清空購物車
session_start();
session_destroy();

echo 'session_destroy';
