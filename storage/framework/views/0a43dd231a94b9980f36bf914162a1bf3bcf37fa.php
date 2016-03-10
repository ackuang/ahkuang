<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col s12 center-align">
		<?php if(!empty($list->logo_name)): ?>
		<img src="../images/logos/<?php echo e($list->logo_name); ?>.png" alt="" class="responsive-img image-style">
		<?php else: ?>
		<img src="../images/logos/noimage.png" alt="" class="responsive-img">
		<?php endif; ?>
		<h4><?php echo e($list->name); ?></h4>
	</div>
</div>
<div class="divider"></div>
<div class="row">
	<div class="col s12 center-align">
		
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>