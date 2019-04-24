<!DOCTYPE html>
<html>
<head> 
<title><?php echo $__env->yieldContent('title'); ?></title>
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

<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></header>
<ul> 

<?php $__env->startSection('sidebar'); ?>
<li>HTML</li>
<li>CSS</li> 
<li>JS</li>

<?php echo $__env->yieldSection(); ?>
</ul> 
</div>

<div class="container">
<?php echo $__env->yieldContent('content'); ?> 
</div>
</body> 
</html>