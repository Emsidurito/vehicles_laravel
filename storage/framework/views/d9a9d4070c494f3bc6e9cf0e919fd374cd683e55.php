<?php $__env->startSection('content'); ?>
<div>
	<a href="<?php echo e(route('marcas.index')); ?>"> Tornar</a>
</div>          
<div> 
	<?php if($errors->any()): ?>
	<ul>
	    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    	<li><?php echo e($error); ?></li>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>        
        <?php endif; ?>
</div>
<div>
	 <h1>Editar marca <?php echo e($marca->name); ?></h1>
	<form action="<?php echo e(route('marcas.update',$marca->id)); ?>" method="POST">
	    <?php echo csrf_field(); ?>

	    <strong>Name:</strong>
	    <input type="text" name="name" value="<?php echo e(old('name',$marca->name)); ?>">
	            
	    <input type="submit" value="Actualitzar">            
	   
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/marcas/edit.blade.php ENDPATH**/ ?>