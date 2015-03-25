<?php if (!defined('THINK_PATH')) exit();?><extended name="Index/index"/>


    <div class="home-template custom-bg"style="">
        <div class="text-center headline">
            <h3>登陆</h3>
        </div>
    <form role="form">
        <div class="form-group">
            <label class="col-md-3" >邮件</label>
            <div class="col-md-9">
                <input type="email" class="form-control" id="" placeholder="请输入你的注册邮箱">
            </div>
        </div>
        <div class="form-group">
            <lable class="col-md-3">密码</lable>
            <div class="col-md-9">
                <input type="password" class="'form-control" id="pw" placeholder="请输入你的密码">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <div class="checkbox">
                    <label><input type="checkbox">记住我</label>
                <div class="col-md-6">
                    <div id="forgetPw">
                        <a href="#">忘记密码</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6 col-xs-offset-3">
                <button type="submit" class="btn btn-block btn-success">登陆</button>
            </div>
        </div>
    </form>
    <p class="text-center" h4>没有账号?</p><a href="#" class="color-blue">快速注册</a>
    </div>