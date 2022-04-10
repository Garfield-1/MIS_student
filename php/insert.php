
<?php
require 'connect.php';//添加数据库

$sql="INSERT INTO 'MSI'.`student` (`student-id`, `realname`, `nickname`, `email`, `pwd`) VALUES ('1', '李四', '王五', 'xx@qq.com', '123');";

if(mysqli_query($conn,$sql))
{
    echo'成功的添加了'.mysqli_affected_rows($conn).'条记录,主键id'.mysqli_insert_id($conn);
}else{
    echo'添加失败'.mysqli_error($conn);
}

mysqli_close($conn);

?>