<?php
require_once('header.php');

$query = $conn->query("SELECT username, verified, salt FROM users WHERE userID = {$_GET['user']}");
$result = $query->fetch_array(MYSQLI_ASSOC);
if ($result != null) {
    if ($result['salt'] == $_GET['unique'] && $result['verified'] != 1) {
        $conn->query("UPDATE users SET verified = TRUE WHERE userID = {$_GET['user']}");
        $_SESSION['alert'] = 'Account verified!';
        $_SESSION['alert-type'] = 'success';
        $_SESSION['userID'] = $_GET['user'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['verified'] = true;
        header('Location: play');
    } else {
        $_SESSION['alert'] = 'Account could not be verified!';
        $_SESSION['alert-type'] = 'danger';
        $_SESSION['verified'] = false;
        header('Location: index');
    }
} else {
    $_SESSION['alert'] = 'Your verification is out of date, please sign up again.';
    $_SESSION['alert-type'] = 'danger';
    header('Location:index');
}