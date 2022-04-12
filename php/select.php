
<?php

use LDAP\Result;

require 'connect.php';//添加数据库

$sql="select `student-id`,`realname`,`nickname` from `student` where `student-id`>0";

$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);


mysqli_data_seek($result,0);
echo '<hr>';
echo '循环遍历结果集:<br>';
$rows=[];
if($result && mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $rows[]=$row;
    }
}

echo '<pre>';
print_r($rows);

//释放结果集
mysqli_free_result($result);
//关闭连接
mysqli_close($conn);

?>