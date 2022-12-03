<?php $__env->startSection('content'); ?>
<div>
	  <h1>Modificacions del vehicle <?php echo e($vehicle->realname); ?></h1>
    
	<table class="table">
		 <thead>
		 <tr>
            <th>Nom </th>
            <th>Accions</th> 
         </tr>
         </thead>
         <tbody>
            <?php $__currentLoopData = $vehiclemods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
         <tr> 
            <td><?php echo e($mod->description); ?></td>
           <td>

                <a href="<?php echo e(route('vehicles.borrarmod',[$vehicle->id, $mod->id])); ?>" role="button" class="btn btn-dark">Borrar</a>
                
            </td> 
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
        </tbody>

     </table>
     
     <div>
        <form method="get" action="<?php echo e(route('vehicles.afegirmod',[$vehicle->id])); ?>">
        <select name="modificacio" class="select">
        <?php $__currentLoopData = $modificacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modificacio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($modificacio->id); ?>"><?php echo e($modificacio->description); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <button type="submit" class="btn btn-dark">Afegir modificacio</button>
    </form>
     </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/vehicles/cambiamod.blade.php ENDPATH**/ ?>