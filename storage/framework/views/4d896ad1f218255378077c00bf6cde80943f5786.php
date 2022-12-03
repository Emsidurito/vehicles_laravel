<?php $__env->startSection('content'); ?>

    <div>        
        <h2>Vehicles</h2>
    </div>
      <?php if(Auth::user()->is_admin): ?>    
    <div>
        <a href="<?php echo e(route('vehicles.create')); ?>"> Nou vehicle</a>
    </div>
    <?php endif; ?>  
   
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

       <?php echo $__env->make('vehicles.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nom Vehicle</th>
                <th>Tipus</th> 
                <th>Potencia</th>
                <th>Combustio</th>                         
                <th>Operacions</th>
            </tr>
        </thead>
        
        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <tr>
            <td><?php echo e($vehicle->id); ?></td>
            <td><?php echo e($vehicle->realname); ?></td>     
            <td><?php echo e($vehicle->tipus); ?></td>
            <td><?php echo e($vehicle->potencia); ?></td>
            <td><?php echo e($vehicle->combustio->combustio); ?></td>                       
            <td>     
                  <a href="<?php echo e(route('vehicles.show',$vehicle->id)); ?>">Mostrar</a>
                  <?php if(Auth::user()->is_admin): ?>
                  |                     
                  <a href="<?php echo e(route('vehicles.cambiamod',$vehicle->id)); ?>">Modificacions</a> |       
                  <a href="<?php echo e(route('vehicles.edit',$vehicle->id)); ?>">Editar</a> |
                  <a href="<?php echo e(route('vehicles.destroy',$vehicle->id)); ?>">Esborrar</a>
                      <?php endif; ?>  
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo e($vehicles->links('pagination::bootstrap-4')); ?>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/vehicles/index.blade.php ENDPATH**/ ?>