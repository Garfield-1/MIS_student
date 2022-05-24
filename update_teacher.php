<?php

require 'link.php';//添加数据库

$user = $_POST["user_name"];
$email = $_POST["email"];
$number = $_POST["numbering"];
$number_news = $_POST["numbering_news"];
$title = $_POST["job_title"];


if ($user == "" || $email == "" || $number == "" || $title == "") {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `teacher_id` from `teacher` where `teacher_id` = '$number'"; //SQL语句
    mysqli_query($conn,"set names utf8");
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 


    if (!$num) 
    {
        echo "<script>alert('输入的工号不存在'); history.go(-1);</script>";
    } else 
    {  
        $sql_insert = "UPDATE `teacher` SET  `teacher_id` = '$number_news',`realname` = '$user', `job_title` = '$title', `email` = '$email' WHERE `teacher_id` = '$number'";
        $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
        if ($result_insert) {
            echo "<script>alert('更新成功！ '); history.go(-1);</script>";
        } else {
            echo "<script>alert('更新失败！'); history.go(-1);</script>";
        }
    }
}
