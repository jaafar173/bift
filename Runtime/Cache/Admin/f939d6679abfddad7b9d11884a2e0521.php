<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale-1">
    <title>我的管理后台</title>
    <link rel="stylesheet" href="/Public/Static/plugins/bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="sidebar-nav navbar-default navbar-collapse" role="navigation">
    <ul class="nav" id="side-menu">
        <li>
            <a href="#"><i class="fa fa-dashboard fa-fw"></i>Dashboard<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo U('Index/index');?>">Statistics</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-folder-open fa-fw"></i>Content<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo U('Article/index');?>">Single Page</a></li>
                <li><a href="<?php echo U('Feedback/index');?>">Feedback</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-folder-open fa-fw"></i>Help Center<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo U('helpmanual/index');?>">Help Manual</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-folder-open fa-fw"></i>Blog<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo U('Blog/index');?>">Blog</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-users fa-fw"></i>Company<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo U('Position/index');?>">Positions</a></li>
                <li><a href="<?php echo U('Apply/index');?>">Applied Positions</a></li>
                <li><a href="<?php echo U('Company/index');?>">Companies</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-users fa-fw"></i>Job Seekers<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo U('Member/index');?>">Personal</a></li>
            </ul>
        </li>
    </ul>
</div>
</body>
</html>