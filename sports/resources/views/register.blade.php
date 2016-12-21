<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
<div class="page-header">
    <h1 class="welcome_title" style="font-size: 40px">运动会赛事管理系统</h1>
</div>
<div class="loginBox" style="height: auto;border-color: #070707">
    <form class="form-horizontal has-feedback" name="signin" method="post" action="register_check">
        <h3 style="text-align: center;">欢迎注册</h1>
            <div class="form-group">
                <label class="col-md-3 control-label">
                    用户名
                </label>
                <div class="col-md-7">
                    <input type="text" name="username" class="form-control" placeholder="username">
                    <span class="glyphicon glyphicon-user" style="position: absolute;right:20px;margin-top: 9px"></span>
                </div>
                @if(isset($fail1))
                <div style="clear: left;margin-left: 150px;color: red">
                <span>{{$fail1}}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">
                    手机号码
                </label>
                <div class="col-md-7">
                    <input type="text" name="phone" class="form-control" placeholder="phone">
                </div>
            </div>
             <div class="form-group">
                <label class="col-md-3 control-label">
                    学号
                </label>
                <div class="col-md-7">
                    <input type="text" name="student_id" class="form-control" placeholder="ID">
                </div>
                @if(isset($fail2))
                <div style="clear: left;margin-left: 150px;color: red">
                <span>{{$fail2}}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">
                    密码
                </label>
                <div class="col-md-7">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
            </div>
            <div class="form-group ">
                <button type="submit" class="btn btn-primary col-md-8 col-md-offset-2 ">注册</button>
            </div>
            <div class="col-md-10 col-md-offset-2" style="font-size: 18px">
                <span>使用该网站的合作伙伴登陆<a href="#">QQ</a>|<a href="#">微信</a>|<a href="#">微博</a></span>
            </div>
            <div class="form-group"></div>
            <div class="col-md-offset-7 ">
                已经有账号<a href="{{url('login')}}">去登陆</a>
            </div>
    </form>
</div>
</body>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>