<?php
require 'link.php';//添加数据库


$sql = "SELECT 
`total`.`student_id`, `student_name`, 
`total`.`certificate_name`, `total`.`certificate_num`,`type`,`source`,`score`,`state`
FROM 
`total`, `certificate`, `student` 
WHERE 
`total`.`certificate_name` = `certificate`.`certificate_name` 
AND `total`.`student_id` = `student`.`student_id` 
AND `total`.`state`='未审核'
ORDER BY 
`total`.`student_id` ASC";


mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);

$test=1;

mysqli_data_seek($result,0);
echo "<table>
<tr>
<th>学生学号</th>
<th>学生姓名</th>
<th>证书名称</th>
<th>证书编号</th>
<th>证书类型</th>
<th>证书发行机构</th>
<th>证书对应学分</th>
<th>当前状态</th>
</tr>";
if($result && mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        //$rows[]=$row;
        echo "<tr>";
        echo "<td align='left'>".$row['student_id']."</td>";
        echo "<td align='center'>".$row['student_name']."</td>";
        echo "<td align='center'>".$row['certificate_name']."</td>";
        echo "<td align='center'>".$row['certificate_num']."</td>";
        echo "<td align='center'>".$row['type']."</td>";
        echo "<td align='center'>".$row['source']."</td>";
        echo "<td align='center'>".$row['score']."</td>";
        echo "<td align='center'>".$row['state']."</td>";
        echo "<td align='center'><a href=registrar_certificate_review.php?cert_num=$row[certificate_num]>通过|
        </a><a href=registrar_review_del_cert.php?cert_num=$row[certificate_num]>不通过</a></td>";
        echo "</tr>";

    }
}

?>