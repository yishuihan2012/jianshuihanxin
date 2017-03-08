<!DOCTYPE html>
<html lang="en">
<head>
	<title>剑水寒心</title>
	<meta charset="utf-8">
	<link href="/css/app.css" rel="stylesheet" type="text/css">
	<script src="/js/app.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/">剑水寒心</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav ">
	        <li class="active"><a href="#">精选商品<span class="sr-only">(current)</span></a></li>
	        <li><a href="#">今日新品</a></li>
	        <li><a href="#">论坛讨论</a></li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	     	<ul class="nav navbar-nav navbar-right">
	     	@if (Auth::guest())
	            <li><a href="{{ route('login') }}">登录</a></li>
	            <li><a href="{{ route('register') }}">注册</a></li>
	        @else
	            <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                    {{ Auth::user()->name }} <span class="caret"></span>
	                </a>
	                <ul class="dropdown-menu" role="menu">
	                    <li>
	                        <a href="{{ route('logout') }}"
	                            onclick="event.preventDefault();
	                                     document.getElementById('logout-form').submit();">
	                            Logout
	                        </a>
	                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                            {{ csrf_field() }}
	                        </form>
	                    </li>
	                </ul>
	            </li>
	        @endif
	        	<li><a href="#">个人入驻</a></li>
	            <li><a href="#">商家入驻</a></li>
	        </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
@yield('content')