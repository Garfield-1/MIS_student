<?php
require 'link.php';//添加数据库

$teacher_id=$_POST["teacher-id"];//以CCNA证书为例

$sql = "SELECT 
`certificate_name`, 
`student_id`, 
`student_name`, 
`certificate_num`, 
`tutor` 
FROM 
`total` 
WHERE 
`total`.`tutor` = '$teacher_id'";


mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

echo '查询到的记录数量'.mysqli_num_rows($result);


mysqli_data_seek($result,0);
echo "<table border='1'  cellspacing='0'>
<tr>
<th>指导教师</th>
<th>学生学号</th>
<th>学生姓名</th>
<th>证书名称</th>
<th>证书编号</th>

</tr>";
$sum=0;
if($result && mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        //$rows[]=$row;
        echo "<tr>";
        echo "<td align='left'>".$row['tutor']."</td>";
        echo "<td align='left'>".$row['student_id']."</td>";
        echo "<td align='left'>".$row['student_name']."</td>";
        echo "<td align='center'>".$row['certificate_name']."</td>";
        echo "<td align='center'>".$row['certificate_num']."</td>";
        echo "<td align='center'></a><a href=registrar_review_del_cert.php?cert_num=$row[certificate_num]>删除</a></td>";
        echo "</tr>";
    }
}

?>