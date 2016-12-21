<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
<div class="page-header" style="padding-left: 100px;padding-bottom: 10px">
    <h1 style="display: inline-block">欢迎<span>{{Session::get("username")}}</span>来到运动会管理系统</h1>
    <div style="margin-left: 500px;display: inline-block;font-size: 18px">
        <span><a href="{{url('logout')}}">退出登录</a></span>&nbsp
        <span><a href="{{url('SelfCenter')}}">个人中心</a></span>&nbsp
        <span><a href="{{url('fengyunbang')}}">查看风云榜</a></span>
    </div>
</div>
<div class="index">
    <h3 style="text-align: center">目前可以报名的比赛</h3>
    <div class="index1">
        <h5 style="text-align: center">男子100米</h5>
        <p class="col-md-12">比赛时间：2016-12-20 09:00:00</p>
        <p class="col-md-8">比赛地点：体育场</p>
        <p class="col-md-8">参赛人数：20人</p>
        <form class="form-horizontal"style="clear: left" action="baoming1" method="get">
           <!-- <div class="form-group">
                <label class="control-label col-md-3">学号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">姓名</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>!-->
            <button type="submit" class="btn-block  btn-primary">报名</button>
            @if(isset($fail))
            <div style="margin-left: 15px;color: red">
                <span>{{$fail}}</span>
            </div>
            @endif
        </form>
    </div>
    <div class="index1">
        <h5 style="text-align: center">男子400米</h5>
        <p class="col-md-12">比赛时间：2016-12-20 09:00:00</p>
        <p class="col-md-8">比赛地点：体育场</p>
        <p class="col-md-8">参赛人数：10人</p>
        <form class="form-horizontal"style="clear: left" action="baoming2" method="get">
           <!-- <div class="form-group">
                <label class="control-label col-md-3">学号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">姓名</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>!-->
            <button type="submit" class="btn-block  btn-primary">报名</button>
             @if(isset($fail2))
            <div style="margin-left: 15px;color: red">
                <span>{{$fail2}}</span>
            </div>
            @endif
        </form>
    </div>
    <div class="index1" style="clear: left">
        <h5 style="text-align: center">男子4*100米</h5>
        <p class="col-md-12">比赛时间：2016-12-20 09:00:00</p>
        <p class="col-md-8">比赛地点：体育场</p>
        <p class="col-md-8">参赛人数：20人</p>
        <form class="form-horizontal"style="clear: left" action="baoming3" method="get">
           <!-- <div class="form-group">
                <label class="control-label col-md-4">队长学号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4">队长姓名</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>!-->
            <button type="submit" class="btn-block  btn-primary">报名</button>
             @if(isset($fail3))
            <div style="margin-left: 15px;color: red">
                <span>{{$fail3}}</span>
            </div>
            @endif
        </form>
    </div>
    <div class="index1">
        <h5 style="text-align: center">女子4*100米</h5>
        <p class="col-md-12">比赛时间：2016-12-20 09:00:00</p>
        <p class="col-md-8">比赛地点：体育场</p>
        <p class="col-md-8">参赛人数：20人</p>
        <form class="form-horizontal"style="clear: left" action="baoming4" method="get">
           <!-- <div class="form-group">
                <label class="control-label col-md-4">队长学号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4">队长姓名</label>
                <div class="col-md-6">
                    <input type="text" class="form-control">
                </div>
            </div>!-->
            <button type="submit" class="btn-block  btn-primary">报名</button>
             @if(isset($fail4))
            <div style="margin-left: 15px;color: red">
                <span>{{$fail4}}</span>
            </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>