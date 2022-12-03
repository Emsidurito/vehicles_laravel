<?php $__env->startSection('content'); ?>
<h2>Fitxa Modificacio</h2>
  
<div>          
	<a href="<?php echo e(route('modificacions.index')); ?>"> 
		Tornar
	</a>
</div>

<div>
	<strong>Nom de la Modificacio:</strong>
	<?php echo e($modificacio->description); ?>

</div>
<div>
<strong>Vehicles amb aquesta modificacio:</strong>
<ul>
   <?php $__currentLoopData = $modificacio->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     	<li>
            <?php echo e($vehicle->realname); ?> 
            </li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/modificacions/show.blade.php ENDPATH**/ ?>