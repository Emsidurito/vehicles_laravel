<?php $__env->startSection('content'); ?>
<div>
	<a href="<?php echo e(route('vehicles.index')); ?>"> Tornar</a>
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
	  <h1>Editar vehicle <?php echo e($vehicle->realname); ?></h1>
	<form action="<?php echo e(route('vehicles.update',$vehicle->id)); ?>" method="POST">
	    <?php echo csrf_field(); ?>
	    <div>
	     <strong>Nom del vehicle:</strong>
	    <input type="text" name="realname" value="<?php echo e($vehicle->realname); ?>">
	  </div>


    <div>
        <strong>Tipus:</strong>

<select name="tipus">
            <option value="Cotxe">Cotxe</option>
            <option value="Moto">Moto</option>
</select>
        
    </div>    
    <div>           
        <strong>Marca:</strong>
<select name="marca_id">
            <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->name); ?></option>        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
</select>
    </div>

    <div>           
        <strong>Combustio:</strong>
<select name="combustio_id">
            <?php $__currentLoopData = $combustions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $combustio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($combustio->id); ?>"><?php echo e($combustio->combustio); ?></option>        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
</select>
    </div>

    <div>
	     <strong>Potencia:</strong>
	   <input type="number" name="potencia" value="<?php echo e($vehicle->potencia); ?>" min="0" max="10000">
	  </div>    

	      <input type="submit" value="Actualitzar">
	            
	
	</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/vehicles/edit.blade.php ENDPATH**/ ?>