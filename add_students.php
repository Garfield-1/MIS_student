<?php

require 'link.php';//添加数据库

$user = $_POST["user_name"];
$email = $_POST["email"];
$number = $_POST["numbering"];
$title = $_POST["profession"];


if ($user == "" || $email == "" || $number == "" || $title == "") {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `student-id` from `student` where `student-id` = '$number'"; //SQL语句
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 


    if ($num) //如果已经存在该用户 
    {
        echo "<script>alert('用户已存在'); history.go(-1);</script>";
    } else //不存在当前注册用户名称 
    {
        $sql_insert = "insert into `student` ( `student-id`, `stu-name`,`email`,`stu-profession`) VALUES ( '".$number." ','".$user." ','".$email."', '".$title."')";
        mysqli_query($conn,"set names utf8");
        $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
        if ($result_insert) {
            echo "<script>alert('添加成功！'); history.go(-1);</script>";
        } else {
            echo "<script>alert('添加失败！'); history.go(-1);</script>";
        }
    }
}
