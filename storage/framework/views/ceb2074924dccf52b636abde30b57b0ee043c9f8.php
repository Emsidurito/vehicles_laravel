<?php $__env->startSection('content'); ?>
<h2>Fitxa Vehicle</h2>
  
<div>          
	<a href="<?php echo e(route('vehicles.index')); ?>"> 
		Tornar
	</a>
</div>

<div>
	<strong>Nom del vehicle:</strong>
	<?php echo e($vehicle->realname); ?>

</div>
<div>
	<strong>Tipus:</strong>
	<?php echo e($vehicle->tipus); ?>

</div>        
<div>
     <strong>Marca:</strong>
    <?php echo e($vehicle->marca->name); ?>

</div>
<div>
     <strong>Combustio:</strong>
    <?php echo e($vehicle->combustio->combustio); ?>

</div>
<div>
    <strong>Potencia:</strong>
    <?php echo e($vehicle->potencia); ?>

</div>  
  <div>
        <strong>Modificacions y alteracions:</strong>
        <ul>
        <?php $__currentLoopData = $vehicle->modificacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
            <?php echo e($mod->description); ?> 
            
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/vehicles/show.blade.php ENDPATH**/ ?>