<?php
require 'link.php';//添加数据库

$sql="select `student_id`,`stu_name`,`email`,`stu_profession` from `student`";


mysqli_query($conn,"set names utf8");
mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)){
    echo '查询到的记录数量'.mysqli_num_rows($result);

    mysqli_data_seek($result,0);
    echo "<table border='1'  cellspacing='0'>
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
            echo "<td align='left'>".$row['student_id']."</td>";
            echo "<td align='center'>".$row['stu_name']."</td>";
            echo "<td align='center'>".$row['email']."</td>";
            echo "<td align='center'>".$row['stu_profession']."</td>";
            echo "</tr>";

        }
    }
}else
{
    echo "未查询到信息";
}

?>