<?php
//登录处理界面 logincheck.php


$servername = "120.78.226.194";
$username = "root";
$password = "13379378389a";
$dbname = "MIS";


//将用户名和密码存入变量中，供后续使用
$user = $_POST["admin_name"];
$psw = $_POST["admin_password"];
$type=$_POST["admin"];
if ($user == "" || $psw == "") {
    //用户名或者密码其中之一为空，则弹出对话框，确定后返回当前页的上一页 
    echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
} else { //确认用户名密码不为空，则连接数据库
    $conn = mysqli_connect($servername, $username, $password, $dbname); //数据库帐号密码为安装数据库时设置
    if (mysqli_errno($conn)) {
        echo mysqli_errno($conn);
        exit;
    }
switch($type)
    {
        case '0':{ 
            $sql = "select username,userpwd from user where username = '$user' and userpwd = '$psw'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num) {
                echo "<script>alert('成功登录 '); window.location.href='index.html';</script>";
                // echo $type;
            } else {
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
            }
            break;
        }
        case '1':{
            echo $type;
            break;
        }
        case '2':{
            echo $type;
            break;
        }
    }
}
