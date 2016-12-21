<!DOCTYPE html>
<html>
<head>
	<title>登陆</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
<div class="page-header">
  <h1 class="welcome_title" style="font-size: 40px">运动会赛事管理系统</h1>
</div>
<div class="loginBox" style="height: auto;border-color: #070707">
      <form class="form-horizontal has-feedback" name="signin" method="post" action="login_check">
      <h3 style="text-align: center;">欢迎登陆</h1>
        <div class="form-group">
            <label class="col-md-3 control-label">
              用户名
            </label>
            <div class="col-md-7">
              <input type="text" name="username"  placeholder="用户名/邮箱/手机号" class="form-control">
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
            密码
          </label>
          <div class="col-md-7">
            <input type="password" name="password" class="form-control" placeholder="password">
          </div>
           @if(isset($fail2))
                <div style="clear: left;margin-left: 150px;color: red">
                <span>{{$fail2}}</span>
                </div>
                @endif
        </div>
        <div class="form-group">
          <label class="col-md-2 col-md-offset-2">记住密码</label>
          <input type="checkbox" name="" value="记住密码">
          <label class="col-md-offset-3">自动登录</label>&nbsp&nbsp&nbsp
          <input type="checkbox" name="">
        </div>
        <div class="form-group ">
               <button type="submit" class="btn btn-primary col-md-8 col-md-offset-2 ">登陆</button>
        </div> 
        <div class="col-md-10 col-md-offset-2" style="font-size: 18px">
         <span>使用该网站的合作伙伴登陆<a href="#">QQ</a>|<a href="#">微信</a>|<a href="#">微博</a></span>
        </div>
        <div class="form-group"></div>
        <div class="col-md-offset-7 ">
            还没有账号<a href="{{url('register')}}">免费注册</a>
        </div>
      </form>
    </div>
</body>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>