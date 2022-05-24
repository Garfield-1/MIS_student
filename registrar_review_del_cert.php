<?php

require 'link.php';//添加数据库

$cert_num = $_GET["cert_num"];


$sql_insert = "DELETE FROM `total` WHERE `certificate_num` =  '$cert_num'";
$result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
if ($result_insert) {
    echo "<script>alert('删除成功！'); history.go(-1);</script>";
} else {
     echo "<script>alert('删除失败！'); history.go(-1);</script>";
}
