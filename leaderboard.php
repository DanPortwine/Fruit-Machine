<?php
require_once('header.php');
$_SESSION['page'] = 'leaderboard';
echo '<script>$("#' . $_SESSION['page'] . 'Nav").addClass("active");</script>';
?>