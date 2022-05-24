<?php

require 'link.php';//添加数据库

$number = $_POST["numbering"];

if ( $number == "" ) {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `certificate_name` from `total` where `certificate_num` = '$number'"; //SQL语句
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 


    if (!$num) 
    {
        echo "<script>alert('输入的证书不存在'); history.go(-1);</script>";
    } else 
    {  
        $sql_insert = "DELETE FROM `total` WHERE `certificate_num` =  '$number'";
        $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
        if ($result_insert) {
            echo "<script>alert('删除成功！'); history.go(-1);</script>";
        } else {
            echo "<script>alert('删除失败！'); history.go(-1);</script>";
        }
    }
}
