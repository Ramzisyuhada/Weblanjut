<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body style="background: #f0f0f0">


<nav class="navbar navbar-inverse" style="border-radius: 0px">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">FAMILY LAUNDRY</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">

<li><a href="/user/history"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
<li><a href="/user/edituser"><i class="glyphicon glyphicon-lock"></i> Ganti Profile</a></li>
<li><a href="{{route('logout')}}"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li><p class="navbar-text">Halo<b> {{Auth::user()->name}}</b> !</p></li>

</ul>
</div>
</div>
</nav>
@yield('head')

