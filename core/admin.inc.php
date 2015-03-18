<?php

//检查是否有管理员
function checkAdmin($sql){
	return fetchOne($sql);
}


//登录状态验证
function checkLogined(){
	if($_SESSION['adminId'] == "" && $_COOKIE['adminId'] == ""){
		alertMes("未登录", "login.php");
	}
}

//退出操作，注销
function logout(){
	$_SESSION = array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(), "", time() - 1);
	}
	if(isset($_COOKIE['adminId'])){
		setcookie("adminId", "", time() - 1);
	}
	if(isset($_COOKIE['adminName'])){
		setcookie("adminName", "", time() - 1);
	}
	session_destroy();
	header("location:login.php");
}

//添加管理员
function addAdmin(){
	$arr = $_POST;
	if(insert("shop_admin", $arr)){
		$mes = "添加成功!<br /><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员列表</a>";
	}else{
		$mes = "添加失败!<br /><a href='addAdmin.php'>重新添加</a>";
	}
	return $mes;
}