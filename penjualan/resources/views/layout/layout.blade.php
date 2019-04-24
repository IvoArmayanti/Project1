<!DOCTYPE html>
<html>
<head> 
<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="index.css ">	
</head> 
  
<body background = "blue">
<div id="wrapper">
<header> 

@include('layout.header')</header>
<ul> 

@section('sidebar')
<li>HTML</li>
<li>CSS</li> 
<li>JS</li>

@show
</ul> 
</div>

<div class="container">
@yield('content') 
</div>
</body> 
</html>