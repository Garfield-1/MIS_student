<?php
require 'link.php';//添加数据库


$sql="select `certificate-name`,`student-id` from `total`";


mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);

$cer_name=$row['certificate-name'];
$stu_id=$row['student-id'];


echo "$cer_name";
echo $row['student-id'];

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
        echo "<td align='left'>".$row['certificate-name']."</td>";
        echo "<td align='center'>".$row['student-id']."</td>";
        echo "</tr>";

    }
    
}
?>