@extends('plantilla')
@section('content')
<div>
	<a href="{{ route('vehicles.index') }}"> Tornar</a>
</div>          
<div> 
	@if ($errors->any())
	<ul>
	    @foreach ($errors->all() as $error)
	    	<li>{{ $error }}</li>
	    @endforeach
	</ul>        
        @endif
</div>
<div>
	  <h1>Editar vehicle {{$vehicle->realname }}</h1>
	<form action="{{ route('vehicles.update',$vehicle->id) }}" method="POST">
	    @csrf
	    <div>
	     <strong>Nom del vehicle:</strong>
	    <input type="text" name="realname" value="{{ $vehicle->realname }}">
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
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->name }}</option>        
            @endforeach            
</select>
    </div>

    <div>           
        <strong>Combustio:</strong>
<select name="combustio_id">
            @foreach($combustions as $combustio)
                <option value="{{ $combustio->id}}">{{ $combustio->combustio }}</option>        
            @endforeach            
</select>
    </div>

    <div>
	     <strong>Potencia:</strong>
	   <input type="number" name="potencia" value="{{ $vehicle->potencia }}" min="0" max="10000">
	  </div>    

	      <input type="submit" value="Actualitzar">
	            
	
	</form>
</div>
@endsection
