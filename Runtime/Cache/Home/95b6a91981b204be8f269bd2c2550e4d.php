<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>注册—BIFT</title>
    <link rel="icon" href="/Public/Static/img/bift.png" type="img/png">
    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="/Public/Static/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Static/plugins/font-awesome/css/font-awesome.min.css">
    <!-- CSS Theme -->
    <!--link rel="stylesheet" href="/Public/Static/css/style.css"-->
    <link rel="stylesheet" href="/Public/Home/css/style.css">

    <script src="/Public/Static/plugins/jquery-2.1.1.min.js"></script>
    <script src="/Public/Static/plugins/bootstrap/js/bootstrap.js">  </script>
    <meta name="viewport" content="width=device-width,initial-scale=1">

</head>
<body id="RegBody" class="img-responsive">

<div class="sign-container">

    <form class="form-sign">
        <h2 class="form-sign-heading" style="color:#ffffff">登陆</h2>
        <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i>
            </span>
                <input type="email" id="inputEmail" class="form-control" placeholder="邮件地址" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-fw fa-lock"></i>
                </span>
                <input type="password" id="inputPassword" class="form-control" placeholder="密码" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-lock fa-fw"></i>
                </span>
                <input type="password" id="inputPwdAgain" class="form-control" placeholder="再次输入密码" required>
            </div>
        </div>
        <div class="checkbox form-group">
            <label>
                <ul class="nav-pills pull-right">
                    <li><input type="checkbox" value="remember-me"> <em style="color: #ffffff">记住我 </em> </li>
                      <li><a href="#" style="color: #ff0000">忘记密码</a></li>
                    </ul>
            </label>
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
        </div>
    </form>
</div>

</body>
</html>