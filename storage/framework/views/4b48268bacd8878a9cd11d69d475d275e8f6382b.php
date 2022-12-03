<?php $__env->startSection('content'); ?>

<div class="container">

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>            
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger">            
            <?php echo e(session('error')); ?>            
        </div>            
    <?php endif; ?>

<?php if(Auth::user()->is_admin): ?> 
    <div>
        <a href="<?php echo e(url('/marcas/create')); ?>">Nova marca</a>
    </div>
 <?php endif; ?> 
    <div>
        <h3>Marcas</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>           
                    <th>Operacions</th>
                    </tr>
            </thead>

                <tbody>
                <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($marca->id); ?></td>
                    <td><?php echo e($marca->name); ?></td>
                   
                    <td>                
                       <a href="<?php echo e(route('marcas.show',$marca->id)); ?>">Mostrar</a> 
                    
                         <?php if(Auth::user()->is_admin): ?>      
                       <a href="<?php echo e(route('marcas.destroy',$marca->id)); ?>">Esborrar</a> 
                    
                                
                       <a href="<?php echo e(route('marcas.edit',$marca->id)); ?>">Actualitzar</a> 
                       <?php endif; ?>  
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
       
    </div>

    <div>
     <?php echo e($marcas->links('pagination::bootstrap-4')); ?>

    </div>
</div>


</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/marcas/index.blade.php ENDPATH**/ ?>