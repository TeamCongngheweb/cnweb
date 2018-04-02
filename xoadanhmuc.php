<?php
require('connect.php');

if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Invalid HTTP method!');

$sql = "DELETE FROM dmbaiviet WHERE IDDanhMuc = IDBaiViet'".$_POST['IDDanhMuc']."'";

// die($sql);

mysqli_query($dbc, $sql);

$adminURL = 'xemdanhmuc.php';
header('Location: '.$adminURL);
?>