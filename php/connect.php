
<?php
$servername = "120.78.226.194";
$username = "root";
$password = "13379378389a";
$dbname = "MIS";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 检测连接
if (mysqli_connect_error($conn)) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功";

?>