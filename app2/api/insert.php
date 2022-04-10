<?php
//處理新增資料的請求
include_once "base.php";
$data['name']=$_POST['name'];
$data['classroom']=$_POST['classroom'];
$data['birthday']=$_POST['birthday'];
$data['seat_num']=$_POST['seat_num'];
$Stu->save($data);
?>