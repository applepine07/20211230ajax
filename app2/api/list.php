<?php include_once "base.php";
$sql="SELECT `classroom` as '班級',count(`id`) as '人數' FROM `students` GROUP by `classroom`;";
$rows=$Stu->q($sql);
echo json_encode($rows);





