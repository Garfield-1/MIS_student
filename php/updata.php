
<?php
require 'connect.php';//添加数据库

$sql="UPDATE `MIS`.`student` SET `realname` = '张三' WHERE `student`.`student-id` = 1;";

if(mysqli_query($conn,$sql))
{
    echo'成功的更新了'.mysqli_affected_rows($conn).'条记录,主键id'.mysqli_insert_id($conn);
}else{
    echo'添加失败'.mysqli_error($conn);
}

mysqli_close($conn);

?>