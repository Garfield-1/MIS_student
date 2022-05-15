<?php
require 'link.php';//添加数据库

$stu_id=$_POST["stu-id"];//以CCNA证书为例

$sql = "SELECT 
`student-id`, `student-name`, `total`.`certificate-name`, `source`, `score` 
FROM 
`total`, `certificate` 
WHERE 
`total`.`student-id` = '$stu_id' 
AND `total`.`certificate-name` = `certificate`.`certificate-name`";


mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);


mysqli_data_seek($result,0);
echo "<table>
<tr>
<th>学生学号</th>
<th>学生姓名</th>
<th>证书名称</th>
<th>发行机构</th>
<th>对应学分</th>
</tr>";
$sum=0;
if($result && mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        //$rows[]=$row;
        echo "<tr>";
        echo "<td align='left'>".$row['student-id']."</td>";
        echo "<td align='left'>".$row['student-name']."</td>";
        echo "<td align='center'>".$row['certificate-name']."</td>";
        echo "<td align='center'>".$row['source']."</td>";
        echo "<td align='center'>".$row['score']."</td>";
        echo "</tr>";

        $sum=$sum+$row['score'];
    }
}
echo "   获得学分总计:$sum";

?>