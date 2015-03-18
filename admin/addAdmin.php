<?php include './header.php'; ?>
<div class="content clearfix">
        <div class="main">
        <style type="text/css">
			#addAdmin input{border: 1px solid #ddd;padding: 5px;}
			#addAdmin .addpd{padding: 10px 0;}
        </style>
            <!--右侧内容-->
            <div class="cont">
                <div class="title">添加管理员</div>
                <div class="details">
                    <center>
                        <h3>添加管理员</h3>
						<form action="doAdminAction.php?act=addAdmin" method="post" id="addAdmin">
							<div class="addpd">
								<span>管理员名称：</span>
								<input type="text" name="username" />
							</div>
							<div class="addpd">
								<span>管理员密码：</span>
								<input type="password" name="password" />
							</div>
							<div class="addpd">
								<span>管理员邮箱：</span>
								<input type="text" name="email" />
							</div>
							<div class="addpd">
								<input type="submit" value="提交" />
							</div>
						</form>
                    </center>
                </div>
            </div>
        </div>

    <?php include './menu.php' ?>