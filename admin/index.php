<?php
require_once '../include.php';
checkLogined();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="style/backstage.css">
</head>

<body>
    <div class="head">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fr">慕课电子商务后台管理系统</h3>
    </div>
    <div class="operation_user clearfix">
        <div class="link fl"><a href="#">慕课</a><span>&gt;&gt;</span><a href="#">商品管理</a><span>&gt;&gt;</span>商品修改</div>
        <div class="link fr">
            欢迎您，

            <?php
                if(isset($_SESSION['adminName'])){
                    echo $_SESSION['adminName'];
                }elseif (isset($_COOKIE['adminName'])) {
                    echo $_COOKIE['adminName'];
                }

            ?>

            &nbsp;&nbsp;<a href="#" class="icon icon_i">首页</a><span></span><a href="#" class="icon icon_j">前进</a><span></span><a href="#" class="icon icon_t">后退</a><span></span><a href="#" class="icon icon_n">刷新</a><span></span><a href="doAdminAction.php?act=logout" class="icon icon_e">退出</a>
        </div>
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">后台管理</div>
                <div class="details">
                    <h3>系统信息</h3>
                    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
                        <tr>
                            <th>操作系统</th>
                            <td><?php echo PHP_OS; ?></td>
                        </tr>
                        <tr>
                            <th>Apache版本</th>
                            <td><?php echo apache_get_version(); ?></td>
                        </tr>
                        <tr>
                            <th>PHP版本</th>
                            <td><?php echo PHP_VERSION; ?></td>
                        </tr>
                        <tr>
                            <th>运行方式</th>
                            <td><?php echo PHP_SAPI; ?></td>
                        </tr>
                    </table>
                    <h3>软件信息</h3>
                    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
                        <tr>
                            <th>系统名称</th>
                            <td>测试商城系统</td>
                        </tr>
                        <tr>
                            <th>开发团队</th>
                            <td>fcdcyy</td>
                        </tr>
                        <tr>
                            <th>系统网址</th>
                            <td>www.ifci.cn</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">管理员</div>
                <ul class="mList">
                    <li>
                        <h3><span>-</span>管理员信息</h3>
                        <dl>
                            <dd><a href="addAdmin.php">添加后台账号</a></dd>
                            <dd><a href="#">商品分类</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span>-</span>商品管理</h3>
                        <dl>
                            <dd><a href="#">商品修改</a></dd>
                            <dd><a href="#">商品分类</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span>-</span>订单管理</h3>
                        <dl>
                            <dd><a href="#">订单修改</a></dd>
                            <dd><a href="#">订单又修改</a></dd>
                            <dd><a href="#">订单总是修改</a></dd>
                            <dd><a href="#">测试内容你看着改</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>