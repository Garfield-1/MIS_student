<?php
require 'link.php';//添加数据库

$sql="select `certificate_name`,`type`,`source`,`score` from `certificate`";


mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)){
    echo '查询到的记录数量'.mysqli_num_rows($result);

    mysqli_data_seek($result,0);
    echo "<table border='1'  cellspacing='0'>
    <tr>
    <th>证书名称</th>
    <th>类型</th>
    <th>发行单位</th>
    <th>学分</th>
    </tr>";
    if($result && mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            //$rows[]=$row;
            echo "<tr>";
            echo "<td align='left'>".$row['certificate_name']."</td>";
            echo "<td align='center'>".$row['type']."</td>";
            echo "<td align='center'>".$row['source']."</td>";
            echo "<td align='center'>".$row['score']."</td>";
            echo "</tr>";

        }
    }
}else
{
    echo "未查询到信息";
}


?>