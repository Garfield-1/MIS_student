<?php

$servername = "120.78.226.194";
$username = "root";
$password = "13379378389a";
$dbname = "MIS";
$conn = mysqli_connect($servername, $username, $password, $dbname); //连接数据库,帐号密码为自己数据库的帐号密码 


$name = $_POST["cert_name"];
$type = $_POST["cert_type"];
$source = $_POST["cert_source"];
$score = $_POST["cert_score"];


if ($name == "" || $type == "" || $source == "" || $score == "") {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `certificate-name` from `certificate` where `certificate-name` = '$name'"; //SQL语句
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 


    if ($num) //如果已经存在该用户 
    {
        echo "<script>alert('证书已存在'); history.go(-1);</script>";
    } else //不存在当前注册用户名称 
    {
        $sql_insert = "insert into `certificate` ( `certificate-name`, `type`,`source`,`score`) VALUES ( '".$name." ', '".$type." ','".$source."','".$score."')";
        $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
        if ($result_insert) {
            echo "<script>alert('添加成功！'); history.go(-1);</script>";
        } else {
            echo "<script>alert('添加失败！'); history.go(-1);</script>";
        }
    }
}
