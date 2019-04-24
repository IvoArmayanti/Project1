 
<?php $__env->startSection('title',$title); ?>
 
<?php $__env->startSection('sidebar'); ?>
##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771## 
<li>PHP</li>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?> 
<p><?php echo e($konten); ?></p>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>