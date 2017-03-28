@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>实验室信息</h1>
    <p class="lead">
      网络账号：
      tj821215(dcc_lab) \ tj796759(dcc_lite) 
    </p>
    <p class="lead">
      密码：
      195681\957697

    </p>
    <p>
      ftp：在资源浏览器中输入\\192.168.3.1，打开share文件夹，账号/密码：fit508/fit508
    </p>
    <p>
      <!-- 注册按钮 -->
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign up now !</a> 
    </p>
  </div>
@stop