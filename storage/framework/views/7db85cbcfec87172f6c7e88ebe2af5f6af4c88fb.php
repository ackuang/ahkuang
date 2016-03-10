<!DOCTYPE html>
<html>
<head>
	<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
	<?php echo $__env->make('layouts.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>