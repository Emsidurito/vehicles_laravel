@extends('plantilla')
@section('content')
<h2>Fitxa Vehicle</h2>
  
<div>          
	<a href="{{ route('vehicles.index') }}"> 
		Tornar
	</a>
</div>

<div>
	<strong>Nom del vehicle:</strong>
	{{ $vehicle->realname }}
</div>
<div>
	<strong>Tipus:</strong>
	{{ $vehicle->tipus }}
</div>        
<div>
     <strong>Marca:</strong>
    {{ $vehicle->marca->name }}
</div>
<div>
     <strong>Combustio:</strong>
    {{ $vehicle->combustio->combustio }}
</div>
<div>
    <strong>Potencia:</strong>
    {{ $vehicle->potencia }}
</div>  
  <div>
        <strong>Modificacions y alteracions:</strong>
        <ul>
        @foreach($vehicle->modificacions as $mod)
            <li>
            {{ $mod->description }} 
            
            </li>
        @endforeach
        </ul>
    </div>


@endsection