<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>风云榜</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
<div class="page-header" style="padding-left: 100px">
    <h1 style="display: inline-block">欢迎<span>{{Session::get("username")}}</span>来到运动会管理系统</h1>
    <div style="margin-left: 500px;display: inline-block;font-size: 18px">
        <span><a href="{{url('logout')}}">退出登录</a></span>&nbsp
        <span><a href="{{url('SelfCenter')}}">个人中心</a></span>&nbsp
        <span><a href="{{url('index')}}">首页</a></span>
    </div>
</div>
<div class="index">
<h3 style="text-align: center;">查看风云榜</h3>
    <div class="index1">
    <h4 style="text-align:center;">男子100米</h4>
        @foreach($gets1 as $get1)
        @if(!empty($get1->ranking))
        <p style="margin-left: 30px">学号{{$get1->student_id}},姓名{{$get1->name}},名次{{$get1->ranking}},成绩{{$get1->grades}}</p>
        @endif
        @endforeach
    </div>
     <div class="index1">
    <h4 style="text-align:center;">男子400米</h4>
        @foreach($gets2 as $get2)
        @if(!empty($get2->ranking))
        <p style="margin-left: 30px">学号{{$get2->student_id}},姓名{{$get2->name}},名次{{$get2->ranking}},成绩{{$get2->grades}}</p>
        @endif
        @endforeach
    </div>
     <div class="index1" style="clear: left;">
    <h4 style="text-align:center;">男子4*100米</h4>
        @foreach($gets3 as $get3)
        @if(!empty($get3->ranging))
        <p style="margin-left: 30px">学号{{$get3->student_id}},姓名{{$get3->name}},名次{{$get3->ranking}},成绩{{$get3->grades}}</p>
        @endif
        @endforeach
    </div>
    <div class="index1">
    <h4 style="text-align:center;">女子4*100米</h4>
        @foreach($gets4 as $get4)
        @if(!empty($get4->ranking))
        <p style="margin-left: 30px">学号{{$get4->student_id}},姓名{{$get4->name}},名次{{$get4->ranking}},成绩{{$get4->grades}}</p>
        @endif
        @endforeach
    </div>
</div>

</body>
</html>