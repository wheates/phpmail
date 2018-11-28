<?php
	include_once("PHPMailer/function.php");
	header("content-type:text/html;charset=utf-8");

	$name = $_POST['name'];
	$message =$_POST['message'];
	$email="qqNumber@qq.com"; //收件人邮箱
	$mailcontent = $name." 给您发来留言，</br>留言内容为：".$message ;
	// 参数一：收件人信箱，二：标题，三：内容
	$flag = sendMail($email,$name.'的留言',$mailcontent);
	if($flag){
		echo '<script>alert("邮件发送成功！");window.history.go(-1);</script>';
		// header('Location:index.html');
	}else{
		echo '<script>alert("邮件发送失败！");window.history.go(-1);</script>';
	}

?>