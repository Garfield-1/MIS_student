<?php

require 'link.php';//添加数据库

$students_id = $_POST["students_id"];
$email = $_POST["email"];
$name = $_POST["stu-name"];
$profession = $_POST["stu-profession"];


if ($students_id == "" || $email == "" || $name == "" || $profession == "") {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `student-id` from `student` where `student-id` = '$students_id'"; //SQL语句
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 


    if (!$num) 
    {
        echo "<script>alert('输入的学号不存在'); history.go(-1);</script>";
    } else 
    {  
        $sql_insert = "UPDATE `student` SET  `stu-name` = '$name', `stu-profession` = '$profession', `email` = '$email' WHERE `student-id` = '$students_id'";
        $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
        if ($result_insert) {
            echo "<script>alert('更新成功！'); history.go(-1);</script>";
        } else {
            echo "<script>alert('更新失败！'); history.go(-1);</script>";
        }
    }
}
