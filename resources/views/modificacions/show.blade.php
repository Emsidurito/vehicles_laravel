@extends('plantilla')
@section('content')
<h2>Fitxa Modificacio</h2>
  
<div>          
	<a href="{{ route('modificacions.index') }}"> 
		Tornar
	</a>
</div>

<div>
	<strong>Nom de la Modificacio:</strong>
	{{ $modificacio->description }}
</div>
<div>
<strong>Vehicles amb aquesta modificacio:</strong>
<ul>
   @foreach($modificacio->vehicles as $vehicle)
     	<li>
            {{ $vehicle->realname }} 
            </li>
   @endforeach
</ul>
</div>
@endsection