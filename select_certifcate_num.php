<?php
require 'link.php';//添加数据库

$stu_id=$_POST["stu_id"];//以CCNA证书为例

$sql = "SELECT 
`student_id`, `student_name`, `total`.`certificate_name`,  `total`.`certificate_num`,
`source`, `score`,`authorities`,`state` 
FROM 
`total`, `certificate` 
WHERE 
`total`.`student_id` = '$stu_id' 
AND `total`.`certificate_name` = `certificate`.`certificate_name`";


mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)){
    echo '查询到的记录数量'.mysqli_num_rows($result);

    mysqli_data_seek($result,0);
    echo "<table border='1'  cellspacing='0'>
    <tr>
    <th>学生学号</th>
    <th>学生姓名</th>
    <th>证书名称</th>
    <th>证书编号</th>
    <th>发行机构</th>
    <th>对应学分</th>
    <th>机构官网</th>
    <th>当前状态</th>
    </tr>";
    $sum=0;
    if($result && mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            //$rows[]=$row;
            echo "<tr>";
            echo "<td align='left'>".$row['student_id']."</td>";
            echo "<td align='left'>".$row['student_name']."</td>";
            echo "<td align='center'>".$row['certificate_name']."</td>";
            echo "<td align='center'>".$row['certificate_num']."</td>";
            echo "<td align='center'>".$row['source']."</td>";
            echo "<td align='center'>".$row['score']."</td>";
            echo "<td align='center'>".$row['authorities']."</td>";
            echo "<td align='center'>".$row['state']."</td>";
            echo "<td align='center'></a><a href=registrar_review_del_cert.php?cert_num=$row[certificate_num]>删除</a></td>";
            echo "</tr>";

            $sum=$sum+$row['score'];
        }
    }
    echo "   获得学分总计:$sum";
}else
{
    echo "未查询到信息";
}
?>