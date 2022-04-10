<?php
//處理查詢資料的請求
include_once "base.php";
$q=$_GET['q'];
$rows=$Stu->q("SELECT * from students WHERE `name` like '%$q%'");
echo json_encode($rows);
?>