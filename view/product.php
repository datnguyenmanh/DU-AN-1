<?php
include './model/pdo.php';
include './model/category.php';
$spl = 'select * from product';
$product = get_ALL($spl);
?>

product