<!DOCTYPE html>
<html> 
<head>
<title>Laravel Saya</title> 
</head>
<body> 
<h1>Data Produk</h1>
<table border="1">
	<thead>
		<tr>No</tr>
		<tr>Nama Produk</tr>
	</thead>
	</tbody>
			<?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr> 
				<td><?php echo e($i+1); ?></td>
				<td><?php echo e($v); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</body> 
</html>