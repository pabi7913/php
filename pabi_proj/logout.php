<?php
session_start();
//★有$字號的都要大寫
unset($_SESSION['user']);
header('location:login.php');