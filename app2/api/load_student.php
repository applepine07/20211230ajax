<?php include_once "base.php";

$classroom=$_GET['classroom'];
$stus=$Stu->all(['classroom'=>$classroom]);
echo json_encode($stus);

