<?php

require 'link.php';//添加数据库

$cert_num = $_GET["cert_num"];

$sql_insert = "UPDATE `total` SET  `state` = '已审核'
WHERE `certificate_num`='$cert_num'";
mysqli_query($conn,"set names utf8");
$result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
if ($result_insert) {
    echo "<script>alert('更新成功！'); history.go(-1);</script>";
    } else {
        echo "<script>alert('更新失败！'); history.go(-1);</script>";
    }

