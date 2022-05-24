<?php
require 'link.php';//添加数据库


$sql="select `teacher_id`,`realname`,`job_title`,`email` from `teacher`";


mysqli_query($conn,"set names utf8");
mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);


mysqli_data_seek($result,0);
echo "<table border='1'  cellspacing='0'>
<tr>
<th>Id</th>
<th>name</th>
<th>job_title</th>
<th>email</th>
</tr>";
if($result && mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        //$rows[]=$row;
        echo "<tr>";
        echo "<td align='left'>".$row['teacher_id']."</td>";
        echo "<td align='center'>".$row['realname']."</td>";
        echo "<td align='center'>".$row['job_title']."</td>";
        echo "<td align='center'>".$row['email']."</td>";
        echo "</tr>";
    } 
}

?>