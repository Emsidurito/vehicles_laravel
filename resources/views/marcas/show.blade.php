@extends('plantilla')
@section('content')
<h2>Fitxa de la marca</h2>
  
<div>          
	<a href="{{ route('marcas.index') }}"> 
		Tornar
	</a>
</div>

<div>
	<strong>Name:</strong>
	{{ $marca->name }}
<div>	
	<strong>Vehicles de la marca:</strong>
<ul>
     @foreach($marca->vehicles as $auto)
          <li>{{ $auto->realname }}</li>
     @endforeach
</ul>
</div>
</div>
@endsection