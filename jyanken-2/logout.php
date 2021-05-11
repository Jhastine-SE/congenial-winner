<?php
session_start();
unset($_SESSION['userName']);
unset($_SESSION['count']);
unset($_SESSION['userWinCount']);
session_destroy();

header('location: index.php');
exit;