<?php
require 'link.php';//添加数据库


$sql="select `teacher-id`,`realname`,`job-title`,`email` from `teacher`";


mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);


mysqli_data_seek($result,0);
echo "<table>
<tr>
<th>Id</th>
<th>name</th>
<th>job-title</th>
<th>email</th>
</tr>";
if($result && mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        //$rows[]=$row;
        echo "<tr>";
        echo "<td align='left'>".$row['teacher-id']."</td>";
        echo "<td align='center'>".$row['realname']."</td>";
        echo "<td align='center'>".$row['job-title']."</td>";
        echo "<td align='center'>".$row['email']."</td>";
        echo "</tr>";

        $sum+=$row['teacher-id'];
    }
    
}
echo "  教师编号总和:$sum";
?>