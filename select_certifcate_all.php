<?php
require 'link.php';//添加数据库


$sql = "SELECT 
`total`.`student-id`, `student-name`, `email`, `stu-profession`, `total`.`certificate-name`, `total`.`certificate-num`,`type`,`source`, `score` 
FROM 
`total`, `certificate`, `student` 
WHERE 
`total`.`certificate-name` = `certificate`.`certificate-name` 
AND `total`.`student-id` = `student`.`student-id` 
ORDER BY 
`total`.`student-id` ASC";


mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);


mysqli_data_seek($result,0);
echo "<table>
<tr>
<th>学生学号</th>
<th>学生姓名</th>
<th>电子邮箱地址</th>
<th>学生所学专业</th>
<th>证书名称</th>
<th>证书类型</th>
<th>证书编号</th>
<th>证书发行机构</th>
<th>证书对应学分</th>
</tr>";
if($result && mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        //$rows[]=$row;
        echo "<tr>";
        echo "<td align='left'>".$row['student-id']."</td>";
        echo "<td align='center'>".$row['student-name']."</td>";
        echo "<td align='center'>".$row['email']."</td>";
        echo "<td align='center'>".$row['stu-profession']."</td>";
        echo "<td align='center'>".$row['certificate-name']."</td>";
        echo "<td align='center'>".$row['certificate-num']."</td>";
        echo "<td align='center'>".$row['type']."</td>";
        echo "<td align='center'>".$row['source']."</td>";
        echo "<td align='center'>".$row['score']."</td>";
        echo "</tr>";

    }
}

?>