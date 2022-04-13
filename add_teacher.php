<?php

$servername = "120.78.226.194";
$username = "root";
$password = "13379378389a";
$dbname = "MIS";
$conn = mysqli_connect($servername, $username, $password, $dbname); //连接数据库,帐号密码为自己数据库的帐号密码 


$user = $_POST["user_name"];
$email = $_POST["email"];
$number = $_POST["numbering"];
$title = $_POST["job_title"];


if ($user == "" || $email == "" || $number == "" || $title == "") {
    echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
    if (mysqli_errno($conn)) {
        echo mysqli_error($conn);
        exit;
    }

    $sql = "select `teacher-id` from `teacher` where `teacher-id` = '$number'"; //SQL语句
    $result = mysqli_query($conn, $sql); //执行SQL语句 
    $num = mysqli_num_rows($result); //统计执行结果影响的行数 


    if ($num) //如果已经存在该用户 
    {
        echo "<script>alert('用户已存在'); history.go(-1);</script>";
    } else //不存在当前注册用户名称 
    {
        $sql_insert = "insert into `teacher` ( `teacher-id`, `realname`,`job-title`,`email`) VALUES ( '".$number." ', '".$user." ','".$title."','".$email."')";
        $result_insert = mysqli_query($conn, $sql_insert); //执行SQL语句 
        if ($result_insert) {
            echo "<script>alert('添加成功！'); history.go(-1);</script>";
        } else {
            echo "<script>alert('添加失败！'); history.go(-1);</script>";
        }
    }
}
