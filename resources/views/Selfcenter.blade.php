<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
    <div class="page-header" style="padding-left: 100px">
        <h1 style="display: inline-block">欢迎<span>{{Session::get("username")}}</span>来到运动会管理系统</h1>
        <div style="margin-left: 500px;display: inline-block;font-size: 18px">
            <span><a href="{{url('logout')}}">退出登录</a></span>&nbsp
            <span><a href="{{url('index')}}">首页</a></span>&nbsp
            <span><a href="{{url('fengyunbang')}}">查看风云榜</a></span>
        </div>
    </div>
    <div class="index">
    <h3 style="text-align:center;">目前您报名的比赛或者取得的成绩</h3>
        @if(isset($fail))
        <div>
            <span>{{$fail}}</span>
        </div>
        @endif
          @if(isset($gets))
          <div style="margin-left: 100px;padding-left: 10px;margin-top: 50px">
            @foreach($gets as $get)
            @if(!empty($get->ranking))
            <p style="color:#5EDEBD">您在{{$get->start_time}}{{$get->game_name}}比赛中获得了第{{$get->ranking}}</p>
            @endif
            @if(empty($get->ranking))
            <p>您报名了比赛{{$get->game_name}},比赛地点是{{$get->place}},比赛时间是{{$get->start_time}}</p>
            @endif
            @endforeach
        </div>
        @endif
    </div>
</body>
</html>