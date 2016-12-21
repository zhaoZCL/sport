<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员成绩登录</title>
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
    <h3 style="text-align: center">输入比赛的成绩</h3>
    <div class="index2">
        <h5 style="text-align: center">男子100米</h5>
        <p class="col-md-12">比赛时间：2016-12-20 09:00:00</p>
        <p class="col-md-8">比赛地点：体育场</p>
        <form class="form-horizontal"style="clear: left" action="grades1" method="post">
            <div class="form-group">
                <label class="control-label col-md-5">参赛者学号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5">参赛者成绩</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="grades">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5">参赛者名次</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="ranking">
                </div>
            </div>
            <button type="submit" class="btn-block">保存</button>
        </form>
    </div>
    <div class="index2">
        <h5 style="text-align: center">男子400米</h5>
        <p class="col-md-12">比赛时间：2016-12-20 09:00:00</p>
        <p class="col-md-8">比赛地点：体育场</p>
        <form class="form-horizontal"style="clear: left" action="grades2" method="post">
            <div class="form-group">
                <label class="control-label col-md-5">参赛者学号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5">参赛者成绩</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="grades">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5">参赛者名次</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="ranking">
                </div>
            </div>
            <button type="submit" class="btn-block">保存</button>
        </form>
    </div>
    <div class="index2">
        <h5 style="text-align: center">男子4*100米</h5>
        <p class="col-md-12">比赛时间：2016-12-20 09:00:00</p>
        <p class="col-md-8">比赛地点：体育场</p>
        <form class="form-horizontal"style="clear: left" action="grades3" method="post">
            <div class="form-group">
                <label class="control-label col-md-5">队长学号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5">团队成绩</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="grades">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5">团队名次</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="ranking">
                </div>
            </div>
            <button type="submit" class="btn-block">保存</button>
        </form>
    </div>
    <div class="index2">
        <h5 style="text-align: center">女子4*100米</h5>
        <p class="col-md-12">比赛时间：2016-12-20 09:00:00</p>
        <p class="col-md-8">比赛地点：体育场</p>
        <form class="form-horizontal"style="clear: left" action="grades4" method="post">
            <div class="form-group">
                <label class="control-label col-md-5">队长学号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="student_id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5">团队成绩</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="grades">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-5">团队名次</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="ranking">
                </div>
            </div>
            <button type="submit" class="btn-block">保存</button>
        </form>
    </div>
</div>
</body>
</html>