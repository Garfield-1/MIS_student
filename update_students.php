<?php

require 'link.php';//添加数据库

$stu_id_news=$_POST["stu_id_news"];
$students_id = $_POST["students_id"];
$email = $_POST["email"];
$name = $_POST["stu_name"];
$profession = $_POST["stu_profession"];


if ($students_id == "" || $email == "" || $name == "" || $profession == "") {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `student_id` from `student` where `student_id` = '$students_id'"; //SQL语句
    mysqli_query($conn,"set names utf8");
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 


    if (!$num) 
    {
        echo "<script>alert('输入的学号不存在'); history.go(-1);</script>";
    } else 
    {  
        $sql_insert = "UPDATE `student` SET  `student_id` = '$stu_id_news', `stu_name` = '$name', `stu_profession` = '$profession', `email` = '$email' WHERE `student_id` = '$students_id'";
        $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
        if ($result_insert) {
            echo "<script>alert('更新成功！'); history.go(-1);</script>";
        } else {
            echo "<script>alert('更新失败！'); history.go(-1);</script>";
        }
    }
}
