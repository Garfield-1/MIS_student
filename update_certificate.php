<?php

require 'link.php';//添加数据库

$certificate = $_POST["certificate_name"];
$type = $_POST["type"];
$number = $_POST["numbering"];
$source = $_POST["source"];


if ($certificate == "" || $type == "" || $number == "" || $source == "") {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `certificate-name` from `certificate` where `certificate-name` = '$certificate'"; //SQL语句
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 


    if (!$num) 
    {
        echo "<script>alert('输入的证书不存在'); history.go(-1);</script>";
    } else 
    {  
        $sql_insert = "UPDATE `certificate` SET  `score` = '$number', `source` = '$source', `type` = '$type' WHERE `certificate-name` = '$certificate'";
        $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
        if ($result_insert) {
            echo "<script>alert('更新成功！ '); history.go(-1);</script>";
        } else {
            echo "<script>alert('更新失败！'); history.go(-1);</script>";
        }
    }
}