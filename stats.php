<?php
require_once('header.php');
$_SESSION['page'] = 'stats';
echo '<script>$("#' . $_SESSION['page'] . 'Nav").addClass("active");</script>';
?>