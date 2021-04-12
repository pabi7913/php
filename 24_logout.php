<?php
session_start();

unset($_SESSION['account']);

header('Location: 23_login.php');