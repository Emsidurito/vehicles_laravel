<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  </head>
<div>
<nav class="navbar navbar-light bg-light">
<form method="GET" action="<?php echo e(route('vehicles.index')); ?>" class="form-inline">
	
	<input type="search" name="searchName" value="<?php echo e($filters['searchName']); ?>" placeholder="Vehicle" class="form-control mr-sm-2">
	<select type="text" name="searchTipus" class="form-control mr-sm-2">
		<option value="">Tria el tipus</option>
		<option value="cotxe" <?php echo e($filters['searchTipus'] == 'cotxe' ? 'selected' : ''); ?>>Cotxe</option>
		<option value="moto"<?php echo e($filters['searchTipus'] == 'moto' ? 'selected' : ''); ?>>Moto</option>
	</select>
	<input type="submit" value="Cercar" class="btn btn-outline-success my-2 my-sm-0">
</form>
</nav>
</div>
<?php /**PATH /home/usuari/PROJECTE M7/vehicles-laravel/resources/views/vehicles/search.blade.php ENDPATH**/ ?>