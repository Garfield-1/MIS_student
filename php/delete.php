
<?php
require 'connect.php';//添加数据库

$sql="delete from`MIS`.`student`  WHERE `student`.`student-id` = 1;";

if(mysqli_query($conn,$sql))
{
    echo'成功的删除了'.mysqli_affected_rows($conn).'条记录,主键id'.mysqli_insert_id($conn);
}else{
    echo'删除失败'.mysqli_error($conn);
}

mysqli_close($conn);

?>