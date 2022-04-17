<?php
require 'link.php';//添加数据库

$sql="select `student-id`,`stu-name`,`email`,`stu-profession` from `student`";

$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);


mysqli_data_seek($result,0);
echo "<table>
<tr>
<th>学号</th>
<th>姓名</th>
<th>邮箱</th>
<th>专业</th>
</tr>";
if($result && mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        //$rows[]=$row;
        echo "<tr>";
        echo "<td align='left'>".$row['student-id']."</td>";
        echo "<td align='center'>".$row['stu-name']."</td>";
        echo "<td align='center'>".$row['email']."</td>";
        echo "<td align='center'>".$row['stu-profession']."</td>";
        echo "</tr>";

    }
}

?>