<?php

require 'link.php';//添加数据库

$user = $_POST["stu-name"];
$number = $_POST["numbering"];
$title = $_POST["cert-name"];
$cert_num=$_POST["cert-num"];
$tutor=$_POST["tutor"];


if ($user == "" || $number == "" || $title == "") {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `student-id` from `total` where `student-id` = '$number'"; //SQL语句
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 



    $sql_insert = "INSERT INTO `MIS`.`total` ( `student-id`,`student-name`,`certificate-name`,`certificate-num`,`tutor`,`state`) 
    VALUES ( '".$number." ','".$user." ','".$title."','".$cert_num."','".$tutor."','未审核')";
    mysqli_query($conn,"set names utf8");
    $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
    if ($result_insert) {
        echo "<script>alert('添加成功！'); history.go(-1);</script>";
    } else {
         echo "<script>alert('添加失败！'); history.go(-1);</script>";
    }

}