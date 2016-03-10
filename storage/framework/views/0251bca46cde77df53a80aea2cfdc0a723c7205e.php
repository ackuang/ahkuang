<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col s12">
		<ul class="collapsible popout" data-collapsible="accordion">
			<?php foreach($sharings as $sharing): ?>
			<li>
				<div class="collapsible-header">
					<i class="material-icons"><?php echo e($sharing->category->icon); ?></i><?php echo e($sharing->title); ?>

					<div class="right">
						<?php echo e(date('d M Y', strtotime($sharing->created_at))); ?>

					</div>
				</div>
				<div class="collapsible-body"><p><?php echo e($sharing->description); ?></p></div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>