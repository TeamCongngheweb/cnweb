<?php
require('connect.php');

if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Invalid HTTP method!');

$sql = "DELETE FROM BaiViet WHERE IDBaiViet = '".$_POST['IDBaiViet']."'";

// die($sql);

mysqli_query($dbc, $sql);

$adminURL = 'xembaiviet.php';
header('Location: '.$adminURL);
?>