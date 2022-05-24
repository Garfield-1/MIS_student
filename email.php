<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';
require 'link.php';//添加数据库

$stu_id=$_POST["stu_id"];
$conclusion=$_POST["txt"];

$sql = "SELECT 
`email` 
FROM 
`student` 
WHERE `student_id` = $stu_id";

mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,$sql);

$obj=mysqli_fetch_object($result);//获取sql结果

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //服务器配置
    $mail->CharSet ="UTF-8";                     //设定邮件编码
    $mail->SMTPDebug = 0;                        // 调试模式输出
    $mail->isSMTP();                             // 使用SMTP
    $mail->Host = 'smtp.163.com';                // SMTP服务器
    $mail->SMTPAuth = true;                      // 允许 SMTP 认证
    $mail->Username = '13379378389@163.com';                // SMTP 用户名  即邮箱的用户名
    $mail->Password = 'FJDQUYAGPPXXIQWL';             // SMTP 密码  部分邮箱是授权码(例如163邮箱)
    $mail->SMTPSecure = 'ssl';                    // 允许 TLS 或者ssl协议
    $mail->Port = 465;                            // 服务器端口 25 或者465 具体要看邮箱服务器支持

    $mail->setFrom('13379378389@163.com', '西安工商学院技能证书管理');  //发件人
    $mail->addAddress($obj->email, 'qq');  // 收件人
    //$mail->addAddress('ellen@example.com');  // 可添加多个收件人
    $mail->addReplyTo('13379378389@163.com', 'info'); //回复的时候回复给哪个邮箱 建议和发件人一致
    
    $mail->isHTML(true);                                  // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
    $mail->Subject = '本邮件由西安工商学院技能证书管理系统自动发送';
    $mail->Body    = '关于您在系统提交的证书有如下问题：<br>'.$conclusion .'<br>发送日期：'. date('Y-m-d H:i:s');
    $mail->AltBody = '如果邮件客户端不支持HTML则显示此内容';

    $mail->send();
    echo '邮件发送成功';
} catch (Exception $e) {
    echo '邮件发送失败: ', $mail->ErrorInfo;
}
?>