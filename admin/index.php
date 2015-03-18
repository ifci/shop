<?php include './header.php'; ?>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">后台管理</div>
                <div class="details">
                    <center>
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
                    </center>
                </div>
            </div>
        </div>
    <?php include './menu.php' ?>