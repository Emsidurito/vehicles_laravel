<?php $__env->startSection('content'); ?>
<h2>Fitxa de la marca</h2>
  
<div>          
	<a href="<?php echo e(route('marcas.index')); ?>"> 
		Tornar
	</a>
</div>

<div>
	<strong>Name:</strong>
	<?php echo e($marca->name); ?>

<div>	
	<strong>Vehicles de la marca:</strong>
<ul>
     <?php $__currentLoopData = $marca->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($auto->realname); ?></li>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/marcas/show.blade.php ENDPATH**/ ?>