<?php
require_once('config.php');
$db = $config['db'];
// establish connection to database
$conn = new mysqli($db['host'], $db['user'], $db['pass'], $db['name']);
// output error if not connected
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}