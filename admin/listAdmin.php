<?php include './header.php'; ?>
<?php
	$rows = getAllAdmin();
	print_r($rows);
 ?>
<div class="content clearfix">
        <div class="main">
        <style type="text/css">
			.btn{padding: 5px 10px;background: #ddd;}
        </style>
            <!--右侧内容-->
            <div class="cont">
                <div class="title">管理员列表</div>
                <div class="details">
                    <center>
                        <div>
                        	<input type="button" value="添加" class="add" onclick="addAdmin()">
                        </div>
						<table class="table" cellpadding="0" cellspacing="0" align="center">
							<tr>
								<th width="15%">编号</th>
								<th width="25%">管理员名称</th>
								<th width="30%">管理员邮箱</th>
								<th>操作</th>
							</tr>
							<tr>
								<td><input type="checkbox" id="c1" class="check"><label for="c1">001</label></td>
								<td>admin</td>
								<td>admin@qq.com</td>
								<td><input type="button" value="修改" class="btn"><input type="button" value="删除" class="btn"></td>
							</tr>
						</table>
                    </center>
                </div>
            </div>
        </div>

    <?php include './menu.php' ?>