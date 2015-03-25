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
        <h2 class="form-sign-heading" style="color: #ffffff">注册</h2>
        <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i>
            </span>
            <input type="email" id="inputEmail" class="form-control" placeholder="邮件地址" required autofocus>
            </div>
        </div>
        <div class="form-group" style="cursor: default">
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
                <input type="checkbox" value="remember-me"style="color: #171bff"><em style="color: #ffffff">以阅读并同意</em><a href="#">《Jaafar个人网站协议》</a>
            </label>
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
        </div>
    </form>
</div>
<script type="text/javascript">
    $("#signupForm .radio-inline input").click(function(){
        $(this).siblings('i').removeClass('hidden').parent().siblings().children().addClass('hidden');
        $(this).parent('label').addClass('select').siblings().removeClass('select');
        if ($(this).val() == 1) {
            $('#jobseeker').addClass('hidden');
            $('#employer').removeClass('hidden');
        } else {
            $('#employer').addClass('hidden');
            $('#jobseeker').removeClass('hidden');
        }
    });
    $().ready(function() {
        $("#signupForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
                repassword: {
                    required: true,
                    minlength: 8,
                    equalTo: "#password"
                }
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                //So i putted it after the .form-group so it will not include to your append/prepend group.
                error.insertAfter(element.parent());
            },
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            submitHandler: function(form) {
                var type = $('input[type="radio"][name="type"]:checked').val();
                var email = $('#email').val();
                var password = $('#password').val();
                $.ajax({
                    url: form.action,
                    type: form.method,
                    data: {
                        type: type,
                        email: email,
                        password: md5(md5(password).substr(1) + email),
                        token: password
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.c == 0) {
                            window.location.href = data.msg;
                        } else {
                            alert(data.msg);
                        }
                    },
                    error: function(data) {

                    }
                });
            }
        });
    });
</script>
</body>
</html>