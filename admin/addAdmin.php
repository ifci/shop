<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加用户</title>
</head>
<body>
	<h3>添加管理员</h3>
	<form action="doAdminAction.php?act=addAdmin" method="post">
		<div>
			<span>管理员名称：</span>
			<input type="text" name="username" />
		</div>
		<div>
			<span>管理员密码：</span>
			<input type="password" name="password" />
		</div>
		<div>
			<span>管理员邮箱：</span>
			<input type="text" name="email" />
		</div>
		<div>
			<input type="submit" value="提交" />
		</div>
	</form>
</body>
</html>